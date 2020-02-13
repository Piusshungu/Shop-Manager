<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;

class AdminController extends Controller
{
    public function index(){
        return view ('admin.home');
    }

    public function DisplayProducts(){
        return view ('admin.products');
    }
   
}
