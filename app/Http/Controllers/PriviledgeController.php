<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PriviledgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function priviledgegetedit(){
        return view('admin.priviledge.edit');
    }
    public function priviledgepostedit(){
        return view('admin.priviledge.edit');
    }
    public function priviledgegetcreate(){
        return view('admin.priviledge.create');
    }
    
    public function store(Request $request)
            {
                $this->validate($request,[
                    'name' => 'required',

                ]);
            
            #save new user details to the database
            $priviledge = new priviledge;
            $priviledge->name = $request->input('name');
            $priviledge->save();
            return\Redirect::to('admin/priviledge/create');
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
    }
}
