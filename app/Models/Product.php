<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
    ];

    public function saleorder()
    {
        return $this->belongsTo('App\Models\SaleOrder');
    }

    public function purchaseorder()
    {
        return $this->belongsTo('App\Models\PurchaseOrder');
    }
}
