<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // $client = Client::all();
        $product = Product::all();
        // $product = Product::with('client')->get();

        return view('product.index', compact('product'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'amount' => 'required|max:12',
            'client_id' => 'required|max:255'
        ]);
        $client = Client::orderBy('created_at', 'desc')->first();
        Product::create([
            'title' => $request->title,
            'amount' => $request->amount,
            'client_id' => $client->id
        ]);
        return view('client.index');
    }
}
