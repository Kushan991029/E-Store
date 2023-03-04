<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addproduct(Request $request){
        $product = new Product;
        $product->product_name = $request->input('productname');
        $product->detail = $request->input('detail');
        $product->price = $request->input('price');
        $res = $product->save();

        if($res){ 
            $data = Product::get();   
            return view('adminProductManagement',compact('data'));
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function showproduct($id){
        $data = Product::where('id','=',$id)->first();
        return view('showProduct',compact('data'));
    }

    public function deleteproduct($id){
        $deletedata = Product::where('id','=',$id)->delete();

        if($deletedata){
            $data = Product::get();   
            return view('adminProductManagement',compact('data'));
        }else{
            return back()->with('fail','Something went wrong');
        }
    }

    public function editproduct($id){
        $data = Product::where('id','=',$id)->first();
        return view('editProduct',compact('data'));
    }

    public function updateproduct(Request $request){
        
        $product = Product::where('id',$request->id)->update([
            'product_name'=>$request->productname,
            'detail'=>$request->detail,
            'price'=>$request->price,
        ]);

        if($product){
            
            $data = Product::get();   
            return view('adminProductManagement',compact('data'));
        }else{
            
            return back()->with('fail','Product data not updated successfully');
        }
    }

    public function placeorder(){
        $data = Product::get();   
        return view('productDetails',compact('data'));
    }
}
