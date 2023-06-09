<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
      'CompanyName',
      'description',
      'address',
      'location',  
    ];
    
    public function companies(){
        return $this->hasMany(Branches::class);
    }
}