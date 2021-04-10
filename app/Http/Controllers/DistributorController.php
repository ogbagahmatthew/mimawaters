<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\distributors;
use Mail;
use App\Mail\messagedistributor;
// use App\Confirmed;
class distributorController extends Controller
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
        $distributors=distributors::all();
        return view('distributors.index')->with('distributors', $distributors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('distributors.create');
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
            'business_name' => 'required',
            'email' => 'required',
            'business_address' => 'required',
            // 'phone_no' =>'required',
        ]);

        $distributors= new distributors;
            $distributors->name = $request->input('name');
            $distributors->business_name = $request->input('business_name');
            $distributors->email= $request->input('email');
            $distributors->business_address = $request->input('business_address');
            $distributors->phone_no = $request->input('phone_no');

            // dd("Hi");
            // Hash::make($data['password']),
            // dd($request);
            $distributors->save();
            // // return 4444;
            // $notificationEmail = 'ogbagahjb@gmail.com';
            // // $notificationEmail = 'mimawatercleanser@gmail.com';
            // // $notificationEmail = 'sales@waterchemicals.com';
            // Mail::to($notificationEmail)->send(new Messagedistributor($distributors->name,$distributors->business_name,$distributors->business_address,$distributors->email, $distributors->phone_no));
            // // return 44444;
            // return redirect()->route('homepage');
            $notificationEmail = 'ogbagahjb@gmail.com';
            // $notificationEmail = 'mimawatercleanser@gmail.com';
            Mail::to($notificationEmail)->send(new Messagedistributor($distributors->name,$distributors->business_name,$distributors->business_address,$distributors->email, $distributors->phone_no));
            return redirect('/');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Httpp\Response
     */
    public function show($id)
    {
        //
        $distributors = distributors::find($id);
        return view('distributors.show')->with('distributors', $distributors);
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
        $distributors= distributors::find($id);
        return view('distributors.edit')->with('distributors', $distributors);
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
            'business_name' => 'required',
            'email' => 'required',
            'business_address' => 'required',
            'phone_no' => 'required',
        ]);

        $distributors= new distributors;
            $distributors->name = $request->input('name');
            $distributors->business_name = $request->input('business_name');
            $distributors->email= $request->input('email');
            $distributors->business_address = $request->input('business_address');
            $distributors->phone_no = $request->input('phone_no');
            // Hash::make($data['password']),
            // dd($request);
            $distributors->save();
            return redirect('/distributors');
    
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
        $distributors = distributors::find($id);
        $distributors->delete();
        return redirect('distributors');
    }
    public function confirmdistributor(){
        $distributors=distributors::all();
        return view('distributors.confirmdistributor')->with('distributors', $distributors);
    }
}
