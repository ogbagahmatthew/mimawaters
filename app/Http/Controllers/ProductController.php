<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;

class ProductController extends Controller
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
        $products=product::all();
        return view('product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
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
            'sold' => 'required',
            'remains' => 'required',
        ]);

        $products=new product;
        $products->quantity = $request->get('quantity');
        $products->sold = $request->get('sold');
        $products->remains = $request->get('remains');
        $products->save();
            return redirect('/products');



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
        $products= product::find($id);
        return view('product.show')->with('products', $products);
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
        $products=product::find($id);
        return view('product.edit')->with('products', $products);
    }

    /**
     * product the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'quantity' => 'required',
            'sold' => 'required',
            'remains' => 'required',
        ]);

        $products=product::find($id);
        $products->quantity = $request->get('quantity');
        $products->sold = $request->get('sold');
        $products->remains = $request->get('remains');
        $products->save();
            return redirect('/products');
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
        $products =product::find($id);
        $products->delete();
        return redirect('products');
    }
}
