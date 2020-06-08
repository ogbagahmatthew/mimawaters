<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $directors = User::where('priviledge_id','3')->get();
        return view('director.index')->with('directors', $directors);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('director.create');
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
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'priviledge_id'=>'required'
            
        ]);

        //Create new post
        // dd($request->image);
            $directors= new User;
            $directors->firstname = $request->get('firstname');
            $directors->lastname = $request->get('lastname');
            $directors->priviledge_id = 3;
            $directors->email= $request->get('email');
            $directors->password = \Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            $directors->save();
            return redirect('/dashboard');
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
        $directors = User::find($id);
        return view('director.show')->with('directors', $directors);
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
        $directors = User::find($id);
        return view('director.edit')->with('directors', $directors);
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
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'priviledge_id'=>'required'
            
        ]);
        $directors=User::find($id);
            $directors->firstname = $request->get('firstname');
            $directors->lastname = $request->get('lastname');
            $directors->priviledge_id = 3;
            $directors->email= $request->get('email');
            $directors->password = \Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            $directors->save();
            return redirect('/account');
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
        $directors = User::find($id);
        $directors->delete();
        return redirect('/director');
    }

    }

