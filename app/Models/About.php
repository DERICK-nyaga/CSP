<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $fillable= [
        'branch',
        'mobile',
        'email',
        'avenue',
        'street',
        'building',
        'floor',
        'roomnumber',
        'weekdaysopening',
        'weekendsopening',
        'weekdaysclosing',
        'weekendsclosing',
    ];
}