<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Orders;
use Mail;
use App\Mail\Messagesorders;
// use App\Confirmed;
class OrderController extends Controller
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
        $orders=Orders::all();
        return view('orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('orders.create');
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
            'quantity' => 'required',
            'email' => 'required',
            'address' => 'required',
            // 'phone_no' =>'required',
        ]);

        $orders= new Orders;
            $orders->name = $request->input('name');
            $orders->quantity = $request->input('quantity');
            $orders->email= $request->input('email');
            $orders->address = $request->input('address');
            $orders->phone_no = $request->input('phone_no');
            // Hash::make($data['password']),
            // dd($request);
            $orders->save();
            $notificationEmail = 'ogbagahjb@gmail.com';
            Mail::to($notificationEmail)->send(new Messagesorders($orders->name,$orders->quantity,$orders->address,$orders->email, $orders->phone_no));
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
        //
        $orders = Orders::find($id);
        return view('orders.show')->with('orders', $orders);
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
        $orders= Orders::find($id);
        return view('orders.edit')->with('orders', $orders);
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
            'quantity' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone_no' => 'required',
        ]);

        $orders= new Orders;
            $orders->name = $request->input('name');
            $orders->quantity = $request->input('quantity');
            $orders->email= $request->input('email');
            $orders->address = $request->input('address');
            $orders->phone_no = $request->input('phone_no');
            // Hash::make($data['password']),
            // dd($request);
            $orders->save();
            return redirect('/orders');
    
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
        $orders = Orders::find($id);
        $orders->delete();
        return redirect('/orders');
    }
    public function confirmorder(){
        $orders=Orders::all();
        return view('orders.confirmorder')->with('orders', $orders);
    }
}
