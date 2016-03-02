<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\NewDay;
use App\Transaction;
use App\Product;

class NewDayController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('new_day.index', compact('products'));
    }

    public function store(Request $request)
    {
    	$product = Product::find($request->product_id);

    	$price = $product->sell_price;

        $quantity = $request->quantity;

        if ($request->direction == 'in') {
            $price = $product->purchase_price;
        } else {
            $quantity = -$quantity;
        }

        Transaction::create([
            'product_id' => $product->id,
            'quantity' => $quantity,
            'price' =>  $price,
        ]);

        $transaction = Transaction::find('transaction_id');

        NewDay::create([

        	'transaction_id' => $transaction->id,

        ]);

        return redirect()->back();

    }
}
