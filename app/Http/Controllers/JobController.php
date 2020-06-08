<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs;
use App\User;

class JobController extends Controller
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
        $jobs=Jobs::all();
        return view('jobs.index')->with('jobs', $jobs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jobs=Jobs::all();
        return view('jobs.create')->with('jobs', $jobs);
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
            'name'=> 'required',
            'description'=> 'required',
        ]);

        $jobs = new Jobs;
        $jobs->name = $request->input('name');
        $jobs->description = $request->input('description');
        $jobs->save();
    return\Redirect::to('jobs');
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
        $jobs=Jobs::find($id);
        return view('jobs.show')->with('jobs', $jobs);
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
        $jobs=Jobs::find($id);
        return view('jobs.edit')->with('jobs', $jobs);
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
            'name' => 'required',
            'description' => 'required',
        ]);
        $jobs= Jobs::find($id);
        $jobs->name = $request->input('name');
        $jobs->description= $request->input('description');
        // Hash::make($data['password']),
        // dd($request);
        $jobs->save();
        return redirect('/jobs');

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
        $jobs =Jobs::find($id);
        $jobs->delete();
        return redirect('jobs');
    }
    public function getuserjobs(){
        $jobs=Jobs::all();
        return view('jobs.userjobs')->with('jobs',$jobs);
    }
}
