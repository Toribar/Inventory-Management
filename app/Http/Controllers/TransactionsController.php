<?php

namespace App\Http\Controllers;

use App\Product;
use App\Transaction;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $products = Product::all();
        $date = Carbon::parse($request->date);

        // $popis = Transaction::where('created_at', '>=', $date)->where('created_at', '<', $date->copy()->addDay())
        // ->where('quantity', '<', '0')->get();
        // $popis = $popis->groupBy('product_id');
        // dd($popis->toArray());

        return view('transactions.index', compact('products', 'popis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
