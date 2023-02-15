<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use App\Models\Product;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data1 = item::all();
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            //dd($data); 
        }
        return view('product.view',compact('data','data1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $product = new product;
        $product->title = $request->title;
        $product->description = $request->description;
        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('photo');
        $image->move(  $destinationPath , $imagename);
        $product->image = $imagename;

        $product->catagory = $request->catagory;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->save();

        return redirect()->back()->with('message','Product added sucessfully');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $product = product::all();
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            //dd($data); 
        }
        return view('product.showproduct',compact('data','product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = product::find($id);
        $data1 = item::all();
        $data = array();
        if(Session::has('loginId')){
            $data = User::where('id', '=',Session::get('loginId'))->first();
            //dd($data); 
        }
        return view('product.editproduct',compact('data','data1','product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$id)
    {
        // dd($request->all());
        $product = product::find($id);
        $product->title = $request->title;
        $product->description = $request->description;
        $image = $request->image;
        if($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('photo');
            $image->move(  $destinationPath , $imagename);
            $product->image = $imagename;
    
        }
       
        $product->catagory = $request->catagory;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->save();
        return redirect()->back()->with('message','Product edited sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product deleted sucessfully'); 
    }
   
}
