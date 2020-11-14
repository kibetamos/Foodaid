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
'vulnerable_income',
'vulnerable_family',
'vulnerable_status',
    ];

    public function vulnerable() {
        return $this->belongsTo('App\Models\vulnerable');
    }
}
