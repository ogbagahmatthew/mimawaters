<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\Mail\MessageSent;
use Mail;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function index()
    {
        //
         $feedbacks = Feedback::all();
        return view('feedback.index')->with('feedbacks', $feedbacks);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'firstname' => 'required',
            // 'priviledge_id'=>'required',
            'lastname' => 'required',
            'email' => 'required',
            'title' => 'required',
            'comment' => 'required'
            
        ]);

        //Create new post
        // dd($request->image);

            $feedbacks= new Feedback;
            $feedbacks->firstname = $request->input('firstname');
            $feedbacks->lastname = $request->input('lastname');
            // $feedbacks->priviledge_id = 1;
            $feedbacks->email= $request->input('email');
            $feedbacks->title= $request->input('title');
            $feedbacks->comment= $request->input('comment');
            $feedbacks->save();
            $notificationEmail = 'ogbagahjb@gmail.com';
            Mail::to($notificationEmail)->send(new MessageSent($feedbacks->firstname,$feedbacks->lastname,$feedbacks->title,$feedbacks->email, $feedbacks->comment));
            return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $feedbacks = Feedback::find($id);
        return view('feedback.show')->with('feedbacks', $feedbacks);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $feedbacks= Feedback::find($id);
        return view('feedback.edit')->with('feedbacks', $feedbacks);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'firstname' => 'required',
            // 'priviledge_id'=>'required',
            'lastname' => 'required',
            'email' => 'required',
            'title' => 'required',
            'comment' => 'required'
            
        ]);

        //Create new post
        // dd($request->image);

            $feedbacks= new Feedback;
            $feedbacks->firstname = $request->input('firstname');
            $feedbacks->lastname = $request->input('lastname');
            // $feedbacks->priviledge_id = 1;
            $feedbacks->email= $request->input('email');
            $feedbacks->title= $request->input('title');
            $feedbacks->comment= $request->input('comment');
            $feedbacks->save();
            return redirect('/dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $feedbacks = Feedback::find($id);
        $feedbacks->delete();
        return redirect('/dashboard');
    }
}
