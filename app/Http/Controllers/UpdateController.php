<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Updates;

class UpdateController extends Controller
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
        $updates=Updates::all();
        return view('update.index')->with('updates', $updates);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('update.create');
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
            'name' => 'required',
            'info' => 'required',
            'email' => 'required',
        ]);
        $updates= new Updates;
        $updates->name = $request->input('name');
        $updates->info = $request->input('info');
        $updates->email= $request->input('email');
        // Hash::make($data['password']),
        // dd($request);
        $updates->save();
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
        $updates=Updates::find($id);
        return view('update.show')->with('updates', $updates);
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
        $updates=Updates::find($id);
        return view('update.edit')->with('updates', $updates);
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
        $this->validate($request,[
            'name' => 'required',
            'info' => 'required',
            'email' => 'required',
        ]);
        $updates= new Updates;
        $updates->name = $request->input('name');
        $updates->info = $request->input('info');
        $updates->email= $request->input('email');
        // Hash::make($data['password']),
        // dd($request);
        $updates->save();
        return redirect('/updates');

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
        $updates =Updates::find($id);
        $updates->delete();
        return redirect('update');
    }
}
