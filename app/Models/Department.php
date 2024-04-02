<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//Generated By PlantUML Command
class Department extends Model
{
    protected $fillable = [
        'name',
        'description',
        'enterprise_id',
    ];

    public function enterprise()
    {
        return $this->belongsTo('App\Models\Bm\Enterprise', 'enterprise_id');
    }

    public function employees()
    {
        return $this->hasMany('App\Models\Employee', 'department_id');
    }
}
