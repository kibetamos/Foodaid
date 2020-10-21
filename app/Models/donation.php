<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class donation extends Model
{
    //
    protected $fillable = [
'donor_name',
'donor_mail',
'donor_phone',
'donor_location',
'food_name',
'food_amount',
'food_description'
    ];

    public function donation() {
        return $this->belongsTo('App\Models\donation');
    }
}
