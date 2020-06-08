<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\User;

class ProfileController extends Controller
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
        return view('staticpages.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    //     $users=User::all();
    //     return view('user.create')->with('users', $users);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    //     $this->validate($request,[
    //         'firstname' => 'required',
    //         'lastname' =>'required',
    //         'email'=>'required',
    //         'password'=>'required'

    //     ]);

        

    //     //Create new post
    //         $user = user::find($id);
    //         $user->firstname = $request->input('firstname');
    //         $user->lastname = $request->input('lastname');
    //         $user->email = $request->input('email');
    //         $user->password = \Hash::make($request['password']);
    //         $user->save();
    //         // dd($courses);

    //         return redirect('/dashboard');
    // }

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
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' =>'required',
            'email'=>'required',
            'password'=>'required'

        ]);

        

        //Create new post
            $user = user::find($id);
            $user->firstname = $request->input('firstname');
            $user->lastname = $request->input('lastname');
            $user->email = $request->input('email');
            $user->password = \Hash::make($request['password']);
            $user->save();
            // dd($courses);

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
    }
}
