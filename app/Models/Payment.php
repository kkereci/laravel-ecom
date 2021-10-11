<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;


    protected $fillable = [
        'amount',
        'paid_at',
    ];

    //DATE processing.
    protected $dates = [
        'paid_at',
    ];
}
