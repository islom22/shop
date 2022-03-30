<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(){
        return view('currency.index');
    }
    public function store(Request $request){
        $this->validate($request,[
            'short_name' => 'required|max:16',
            'country' => 'required|max:255'
        ]);

        Currency::create([
            'short_name' =>$request->short_name,
            'country' =>$request->country
        ]);
        return view('currency.index');
    }
}