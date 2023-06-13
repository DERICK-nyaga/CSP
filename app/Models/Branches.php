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
        return $this->belongsToMany(Company::class);
    }
}