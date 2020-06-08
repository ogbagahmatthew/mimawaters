<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $applicants=Applicant::all();
        return view('Applicant.index')->with('applicants', $applicants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Applicant.create');
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
         //
         $this->validate($request,[
            'name' => 'required',
            'position_sort' => 'required',
            'email' => 'required',
            
        ]);

        //Create new post
        // dd($request->image);
            $applicants= new Applicant;
            if($request->hasFile('file')){
                $file = $request->file;
                $filename = $file->getClientOriginalName();
                $file->storeAs('public/files',$filename);
                $applicants->file = $filename;      
            }
            // $curriculum->save();
            $applicants->name = $request->input('name');
            $applicants->position_sort = $request->input('position_sort');
            $applicants->email= $request->input('email');
            // $applicants->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            // dd($request);
            $applicants->save();
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
        // //
        // $applicants = Applicant::find($id);
        // return view('Applicant.show')->with('applicants', $applicants);
        $applicants=Applicant::find($id);
        return view('Applicant.show')->with('applicants', $applicants);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    //     $applicants=Applicant::find($id);
    //     return view('Applicant.edit')->with('applicants', $applicants);
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
    //      //
    //      $this->validate($request,[
    //         'name' => 'required',
    //         'position_sort' => 'required',
    //         'email' => 'required',
            
    //     ]);

    //     //Create new post
    //     // dd($request->image);
    //         $applicants=Applicant::find($id);
    //         $applicants->name = $request->input('name');
    //         $applicants->position_sort = $request->input('position_sort');
    //         $applicants->email= $request->input('email');
    //         // $applicants->password= Hash::make($request['password']);
    //         // Hash::make($data['password']),
    //         // dd($request);
    //         $applicants->save();
    //         return redirect('/applicant');
    // }
    

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
