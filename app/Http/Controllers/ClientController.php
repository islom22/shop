<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index(){
        //return json_decode(Client::all());
      // $client = Client::all();
      //  return response()->json($client);
        return view('client.index');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name' => 'required|max:255',
            'phone' => 'required|max:12',
            'family' => 'required|max:255'
        ]);

        $client = Client::create([
            'name' =>$request->name,
            'phone' =>$request->phone,
            'family' =>$request->family
        ]);

        return view('product.index', compact('client'));
    }
    public function show(){
        //return json_decode(Client::all());
        $client = Client::with('product')->get();
        return response()->json($client);
    }
}
