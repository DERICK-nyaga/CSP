<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcel extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'parcel_id',
        'companies_id',
        'branch_id',
        'sender',
        'phoneNumber',
        'receipient',
        'ReceipientContact',
        'town',
        'weight',
        'PickupStation',
        'DeliveryAddress',
        'payment',
        'amount',
    ];
    public function branches(){
        return $this->belongsTo(Branches::class);
    }
    public function user(){
        return $this->belongsTo(Users::class);
    }
}