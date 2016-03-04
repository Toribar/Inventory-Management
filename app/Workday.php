<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workday extends Model
{
    protected $dates = ['started_at', 'closed_at'];

    public function sale()
    {
    	return $this->hasMany(Sale::class);
    }

    public static function getActive()
    {
    	return static::whereNull('closed_at')->first(); //static se odnosi na ime trenutne klase
    }
}
