<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
        $this->middleware('auth');
    }
        //
 public function index()
    {
        //
        $sales = User::where('priviledge_id','2')->get();
        return view('sales.index')->with('sales', $sales);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sales.create');
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
            $sales= new User;
            $sales->firstname = $request->input('firstname');
            $sales->lastname = $request->input('lastname');
            $sales->priviledge_id = 2;
            $sales->email= $request->input('email');
            $sales->password = \Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            $sales->save();
            return redirect('/Dashboard');
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
        $sales = user::find($id);
        return view('sales.show')->with('sales', $sales);
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
        $sales= User::find($id);
        return view('sales.edit')->with('sales', $sales);
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

            $sales=User::find($id);
            $sales->firstname = $request->input('firstname');
            $sales->lastname = $request->input('lastname');
            $sales->priviledge_id = 2;
            $sales->email= $request->input('email');
            $sales->password_hash= $request->input('password');
            $sales->save();
            return redirect('/Dashboard');
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
        $sales = user::find($id);
        $sales->delete();
        return redirect('/dashboard');
    }
}
