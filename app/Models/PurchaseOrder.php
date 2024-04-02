<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class PurchaseOrder extends Model
{
    protected $fillable = [
        'serie',
        'correlative',
        'stored_at',
        'state',
    ];

    public function employee()
    {
        return $this->belongsTo('App\Models\Employee');
    }

    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }
}
