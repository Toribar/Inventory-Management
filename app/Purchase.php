<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = ['workday_id', 'product_id', 'quantity', 'price'];

    
	public function workday()
    {
    	return $this->belongsTo(Workday::class);
    }

    public function product()
    {
    	return $this->belongsTo(Product::class);
    }
}