<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
      'CompanyName',
      'branches',
      'town',
    ];

    public function companies(){
        return $this->hasMany(Branches::class);
    }
}