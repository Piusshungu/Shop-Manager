<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flash;

class ProductsController extends Controller
{
    public function index(){
        $product = Products::all();
        return view ('admin.home');
    }

    public function DisplayProducts(){
        return view ('admin.products');
    }

    public function AddProducts(Request $request){
        $product = new Product();
        $product->name_of_product = request('name_of_product');
        $product->category = request('category');
        $product->country = request('category');
        $product->number_of_products = request('number_of_products');
        $product->save();
        return redirect()->route('products')
        ->with('success','Products successfully added');

    }
}
