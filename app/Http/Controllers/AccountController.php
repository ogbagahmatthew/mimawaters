<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
class AccountController extends Controller
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
        $accounts = Account::all();
        return view('account.index')->with('accounts', $accounts);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('account.create');
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
            'amount_paid' => 'required',
            'balance' => 'required',
            'total' => 'required',
            
        ]);

        //Create new post
        // dd($request->image);
            $accounts=new Account;
            $accounts->name = $request->input('name');
            $accounts->quantity = $request->input('quantity');
            $accounts->amount_paid = $request->input('amount_paid');
            $accounts->balance = $request->input('balance');
            $accounts->total= $request->input('total');
            // $accounts->password= Hash::make($request['password']);
            // Hash::make($data['password']),
            // dd($request);
            $accounts->save();
            return redirect('/account');
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
        $accounts = Account::find($id);
        return view('account.show')->with('accounts', $accounts);
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
        $accounts = Account::find($id);
        return view('account.edit')->with('accounts', $accounts);
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
            'amount_paid'=> 'required',
            'balance'=>'required',
            'total'=>'required',
            
        ]);
        $accounts = Account::find($id);
        $accounts->name = $request->get('name' );
        $accounts->quantity = $request->get('quantity');
        $accounts->amount_paid = $request->get('amount_paid');
        $accounts->balance = $request->get('balance');
        $accounts->total = $request->get('total');
        $accounts->save();
        return redirect('/account');
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
        $accounts = Account::find($id);
        $accounts->delete();
        return redirect('/account');
}
}
