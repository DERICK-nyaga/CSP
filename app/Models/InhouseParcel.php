<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InhouseParcel extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'ownersname',
        'destination',
        'mobile',
        'email',
        'address',
        
    ];
}