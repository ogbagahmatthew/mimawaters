<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Confirmed;

class ConfirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $confirms=Confirmed::all(); 
        return view('confirm.index')->with('confirms', $confirms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('confirm.create');
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
            'quantity' => 'required',
            'amount' => 'required',
        
        ]);
        $confirms= new Confirmed;
        $confirms->quantity = $request->input('quantity');
        $confirms->amount = $request->input('amount');
        // $confirms->email= $request->input('email');
        // // Hash::make($data['password']),
        // // dd($request);
        $confirms->save();
        return redirect('/confirms');

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
        $confirms=Confirmed::find($id); 
        return view('confirm.show')->with('confirms', $confirms);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    //     $confirms=Confirmed::find($id); 
    //     return view('confirm.edit')->with('confirms', $confirms);
       
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    //     $this->validate($request,[
    //         'quantity' => 'required',
    //         'amount' => 'required',
        
    //     ]);
    //     $confirms=Confirmed::find($id);
    //     $confirms->quantity = $request->input('quantity');
    //     $confirms->amount = $request->input('amount');
    //     // $confirms->email= $request->input('email');
    //     // // Hash::make($data['password']),
    //     // // dd($request);
    //     $confirms->save();
    //     return redirect('/confirms');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
