<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salesreport;

class salesreportController extends Controller
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
        $salesreports=Salesreport::all();
        return view('salesreport.index')->with('salesreports', $salesreports);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('salesreport.create');
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
            'email'=> 'required',
            
        ]);

        $salesreport = new Salesreport;
        if($request->hasFile('file')){
            $file = $request->file;
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/files',$filename);
            $applicants->file = $filename;      
        }

        $salesreport->name = $request->input('name');
        $salesreport->email = $request->input('email');
        $salesreport->description = $request->input('description');
        // $salesreport->priviledge_id = 2;
        $salesreport->save();
    return\Redirect::to('salesreport');
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
        $salesreports=Salesreport::find($id);
        return view('salesreport.show')->with('salesreports', $salesreports);
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
        $salesreports=Salesreport::find($id);
        return view('salesreport.edit')->with('salesreports', $salesreports);
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
            'name'=> 'required',
            'description'=> 'required',
            'email'=>'required'
            
        ]);

        $salesreport = new Salesreport;
        $salesreport->name = $request->input('name');
        $salesreport->email = $request->input('email');
        $salesreport->description = $request->input('description');
        // $salesreport->priviledge_id = 2;
        $salesreport->save();
    return\Redirect::to('salesreport');
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
        $salesreports =Salesreport::find($id);
        $salesreports->delete();
        return redirect('salesreport');
    }
}
