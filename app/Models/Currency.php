<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    protected $fillable = [
        'CURRENCY_ID',
        'CURRENCY_TITLE',
        'CURRENCY_PICTURE',
    ];
}
