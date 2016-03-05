<?php

namespace App;

use DB;

use Illuminate\Database\Eloquent\Model;

class Workday extends Model
{
    protected $dates = ['started_at', 'closed_at'];

    public function sales()
    {
    	return $this->hasMany(Sale::class);
    }

    public function getTotal()
    {
    	// return $this->sales()->sum(DB::raw('quantity * price'));  moze i ovako //baza sumira
    	
    	// return $this->sales->sum(function ($sale) {
    	// 	return $sale->quantity * $sale->price;   //sumira collection laravelov
    	// });
    	$total = 0;

    	foreach($this->sales as $sale) {
    		$total += $sale->price * $sale->quantity;
    	}

    	return $total;
    }

    public static function getActive()
    {
    	return static::whereNull('closed_at')->first(); //static se odnosi na ime trenutne klase
    }
}
