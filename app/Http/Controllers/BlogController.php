<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\Auth;
use DB;
use JD\Cloudder\Facades\Cloudder;

class BlogController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(["auth"], ["only" => ["update", "store", "destroy", "create"]]);
    }

    public function index(){
        $blogs = DB::table('blogs')->paginate(20);
        $array = [
            'blogs' => $blogs
        ];
        return view('blog.index', $array);
    }


    public function create(){
        return view('blog.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'title' => 'required|unique:blogs',
            'image' => 'required',
            'body' => 'required'
        ]);
        
        $blog = new Blog;
        $blog->title = $request['title'];
        $blog->slug = str_slug($blog->title, '-');
        $blog->body = $request['body'];
        $blog->user_id = Auth::user()->id;
        $file = $request['image'];
        Cloudder::upload($file);
        $upload = Cloudder::getResult();
        $blog->image = $upload['url'];
        $blog->save();
        return redirect('blogs')->with('success', "Article successfully posted");
    }

    public function edit($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail(); 
        $array = [
            'blog' => $blog
        ];
        return view('blog.edit', $array);
    }

    public function update(Request $request, $slug){
        $blog = Blog::where('slug', $slug)->firstOrFail(); 
        // $blog->title = $request['title'];
        // $blog->body = $request['body'];
        $file = $request['image'];
        Cloudder::upload($file);
        $upload = Cloudder::getResult();
        $blog->image = $upload['url'];
        $blog->update();
        if($request['image'] != null){
            $image = $request['image'];
            Cloudder::upload($image);
            $upload = Cloudder::getResult();
            $blog->image = $upload['url'];
        }   
        $blog->title = $request['title'];
        $blog->body = $request['body'];
        $blog->update();
        return redirect('/blogs')->with('success', 'Blog successfully edited');
    }


    public function read($slug){
        $blog = Blog::where('slug', $slug)->firstOrFail(); 
        return view('blog.show')->with('blog', $blog);
    }

    // public function show($id){
        
    // }

    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blogs')->with('success', 'Blog successfully deleted');
    }
}