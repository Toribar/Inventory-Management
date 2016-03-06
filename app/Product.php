<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }

    public function purchases()
    {
    	return $this->hasMany(Purchase::class);
    }

    public function getSalesQuantity()
    {
        return $this->sales()->sum('quantity');
    }

    public function getPurchaseQuantity()
    {
        return $this->purchases()->sum('quantity');
    }

      
    public function getStockQuantity()
    {
        return $this->getPurchaseQuantity() - $this->getSalesQuantity();
    }


    public function getPurchasePrice()
    {
        return $this->purchases()->latest()->first()->price;
    }
}
