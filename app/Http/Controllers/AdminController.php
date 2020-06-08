<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Admin;
use App\User;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
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
        $admins = User::where('priviledge_id','1')->get();
        return view('Admin.index')->with('admins', $admins);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.create');
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
            
        ]);

        //Create new post
        // dd($request->image);
            $admins= new User;
            $admins->firstname = $request->input('firstname');
            $admins->lastname = $request->input('lastname');
            $admins->priviledge_id = 1;
            $admins->email= $request->input('email');
            $admins->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            $admins->save();
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
        $admins = user::find($id);
        return view('Admin.show')->with('admins', $admins);
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
        $admins= User::find($id);
        return view('Admin.edit')->with('admins', $admins);
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
            'priviledge_id'=>'required',
            'lastname' => 'required',
            'email' => 'required',
            'password' => 'required',
            
        ]);

        //Create new post
        // dd($request->image);

            $admins= new User;
            $admins->firstname = $request->input('firstname');
            $admins->lastname = $request->input('lastname');
            $admins->priviledge_id = 1;
            $admins->email= $request->input('email');
            $admins->password_hash= $request->input('password');
            $admins->save();
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
        $admins = user::find($id);
        $admins->delete();
        return redirect('/dashboard');
    }

    public function sales(){
        $sales= User::where('priviledge_id', '2')->get();
        return view('Admin.sales')->with('sales', $sales);
    }

    //  public function studentstore(Request $request)
    // {
    //     //
    //     $this->validate($request,[
    //         'firstname' => 'required',
    //         'middlename' => 'required',
    //         'lastname' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
            
    //     ]);

    //     //Create new post
    //     // dd($request->image);
    //         $students= new User;
    //         $students->firstname = $request->input('firstname');
    //         $students->middlename =  $request->input('middlename');
    //         $students->lastname = $request->input('lastname');
    //         $students->priviledge_id = 1;
    //         $students->email= $request->input('email');
    //         $students->password= Hash::make($request['password']);
    //         // Hash::make($data['password']),
    //         // dd($request);
    //         $students->save();
    //         return redirect('/dashboard');
    // }


public function directors(){
    $directors= User::where('priviledge_id', '3')->get();
    return view('Admin.directors')->with('directors', $directors);
}
}