<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parcels extends Model
{
    use HasFactory;
    protected $fillable = [
        'sender',
        'SenderContact',
        'receipient',
        'ReceipientContact',
        'town',
        'weight',
        'PickupStation',
        'DeliveryAddress',
        'payment',
    ];
    public function branches(){
        return $this->belongsTo(Branches::class);
    }
    public function user(){
        return $this->belongsTo(Users::class);
    }
}