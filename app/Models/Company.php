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

    public function branches(){
        return $this->hasMany(Branches::class);
    }
    public function abouts(){
        return $this->hasOne(Abouts::class);
    }
    public function services(){
        return $this->hasOne(Services::class);
    }
    public function prices(){
        return $this->hasMany(PriceList::class);
    }
}