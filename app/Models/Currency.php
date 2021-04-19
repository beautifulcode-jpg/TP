<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'CURRENCY_ID';
    public $timestamps = false;
    protected $fillable = [
        'CURRENCY_ID',
        'CURRENCY_TITLE',
        'CURRENCY_PICTURE',
    ];

    public function getRouteKeyName()
    {
        return 'CURRENCY_ID';
    }
}
