<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class LagerController extends Controller
{
    public function index()
    {
    	$products = Product::all();


    	return view('lager.index', compact('products'));

    }

    public function store(Request $request)
    {

    	$product = new Product;

    	$product->name = $request->name;

    	$product->purchase_price = $request->purchase_price;

    	$product->sell_price = $request->sell_price;

    	$product->transaction;

    	$product->save();

    	return redirect('lager.index');

    }
}
