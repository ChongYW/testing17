<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bit extends Model
{
    use HasFactory;

    protected $fillable = [
        'chartName',
        'currenciesName',
        'rate',
        'updateTimeUTC',
    ];
}
