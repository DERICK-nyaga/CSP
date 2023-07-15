<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'companies_id',
        'service1',
        'service2',
        'service3',
        'service4',
        'service5',
        'service6',
        'service7',
        'service8',
        'service9',
        'service10',
    ];
    public function services(){
        return $this->belongsTo(Company::class);
    }
}