<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home')->withProducts(\App\Product::all());
    }

    public function show($id)
    {
        // $product = Product::where('tinyurl', $id)->first();
        // return $product;
        // return view('welcome', compact('product'));
        return view('show')->withProduct(Product::where('tinyurl', $id)->first());
    }
}
