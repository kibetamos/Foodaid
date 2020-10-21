<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vulnerable extends Model
{
    //
    protected $fillable = [
'vulnerable_name',
'vulnerable_phone',
'vulnerable_location',
'vulenerable_income',
'vulenerable_family',
'vulenerable_status',
    ];

    public function donation() {
        return $this->belongsTo('App\Models\vulnerable');
    }
}
