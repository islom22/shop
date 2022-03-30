<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $admin = Client::all();
        return view('admin.index',compact('admin'));
    }
    public function product(){
        $product = Product::with('client')->get();
        return view('admin.product',compact('product'));
    }
}
