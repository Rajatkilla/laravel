<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class myController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showproductform(){
        return view('addproduct');
    }
    public function index()
    {
        return view('firstpage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image=null;
        if ($request->hasFile('image')){
            $file=$request->File('image');
            $image=mt_rand(10001,9999999).'_'.$file->getClientOriginalName();
            $file->move('uploads/products/',$image);
        }
        Product::create([
            'productname'=>$request->get('pname'),
            'product_price'=>$request->get('price'),
            'product_quantity'=>$request->get('quantity'),
            'product_description'=>$request->get('description'),
            'product_image'=>$image
        ]);
        $request->session()->flash('msg','Product has been added successfully');
        return redirect()->back();
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
