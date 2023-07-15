<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branches extends Model
{
    use HasFactory;

    protected $fillable = [
        'BranchName',
        'location',
        'mobile',
        'email',
    ];

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function parcels(){
        return $this->hasMany(Parcel::class);
    }
}