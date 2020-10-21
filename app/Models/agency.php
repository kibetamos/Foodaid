<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agency extends Model
{
    protected $fillable = [
'agency_name',
'agency_phone',
'agency_mail',
'agency_location',

    ];

 public function agency() {
        return $this->belongsTo('App\Models\agency');
    }
}