<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Workday;
use App\Product;

class WorkdaysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ovde izlista sve radne dane sa paginate
        $products = Product::all();
        $active = Workday::getActive();
        return view('workdays.index', compact('workdays', 'active', 'products'));
    }

   
    public function all()
    {
        return "hello";
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $workday = new Workday;

        $workday->started_at = Carbon::now();

        $workday->save();

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
        $workday = Workday::find($id);
        
        return view('workdays.show', compact('workday'));
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
        $workday = Workday::find($id);

        $workday->closed_at = Carbon::now();

        $workday->save();

        return redirect()->route('workdays.show', $id);
    }

}
