<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Expenses;

class ExpensesController extends Controller
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
        $expenses=Expenses::all();
        return view('expenses.index')->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('expenses.create');
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
            'name_item' => 'required',
            'quantity_item' => 'required',
            'cost_price' => 'required',
            'total_cost' => 'required',
        ]);

        $expenses=new Expenses;
        $expenses->name_item=$request->get('name_item');
        $expenses->quantity_item=$request->get('quantity_item');
        $expenses->cost_price=$request->get('cost_price');
        $expenses->total_cost=$request->get('total_cost');
        $expenses->save();
            return redirect('/expenses');
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
        $expenses=Expenses::find($id);
        return view('expenses.show')->with('expenses', $expenses);
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
        //
        $expenses=Expenses::find($id);
        return view('expenses.edit')->with('expenses', $expenses);
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
            'name_item' => 'required',
            'quantity_item' => 'required',
            'cost_price' => 'required',
            'total_cost' => 'required',
        ]);
        $expenses=Expenses::find($id);
        $expenses->name_item=$request->get('name_item');
        $expenses->quantity_item=$request->get('quantity_item');
        $expenses->cost_price=$request->get('cost_price');
        $expenses->total_cost=$request->get('total_cost');
        $expenses->save();
            return redirect('/expenses');
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
        $expenses = Expenses::find($id);
        $expenses->delete();
        return redirect('/director');
    }
}
