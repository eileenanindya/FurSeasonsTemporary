<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    public function view_product(){
        return view('admin.product');
    }

    public function add_product(Request $request){
        $product = new product;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_desc = $request->product_desc;
        $product->product_stock = $request->product_stock;
        $product_pic = $request->product_pic;
        $picname = time().'.'.$request->product_pic->getClientOriginalExtension();
        $request->product_pic->move(public_path('product'), $picname);
        $product->product_pic = $picname;
        $product->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }

    public function show_product(){
        $product = Product::all();
        return view('admin.showproduct', compact('product'));
    }

    public function delete_product($id){
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('message', 'Product Deleted Successfully');
    }

    public function edit_product($id){
        $product = Product::find($id);
        return view('admin.editproduct', compact('product'));
    }
    
    public function edit_product_confirm(Request $request, $id){
        $product = Product::find($id);
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_desc = $request->product_desc;
        $product->product_stock = $request->product_stock;
        $product_pic = $request->product_pic;
        $picname = time().'.'.$request->product_pic->getClientOriginalExtension();
        $request->product_pic->move(public_path('product'), $picname);
        $product->product_pic = $picname;
        $product->save();

        return redirect()->back()->with('message', 'Product Edited Successfully');
    }

    public function order(){
        $order = Order::all();
        return view('admin.order', compact('order'));
    }
}
