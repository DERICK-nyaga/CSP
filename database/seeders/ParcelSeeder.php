<?php

namespace Database\Seeders;

use App\Models\Parcel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parcels = [
            [
                'companies_id' => '1',
                'branch_id' => '1',
                'sender' => 'Nyaga',
                'SenderContact' => '09898',
                'receipient' => 'testing',
                'ReceipientContact' => '953053',
                'town' => 'Kakamega',
                'weight' => '67',
                'PickupStation' => 'Kach',
                'DeliveryAddress' => 'Kakamega Bscenter',
                'payment' => 'onDelivery',
                'price' => '1056',
            ],
            [
                'companies_id' => '2',
                'branch_id' => '2',
                'sender' => 'Colonel',
                'SenderContact' => '098984',
                'receipient' => 'testing',
                'ReceipientContact' => '9530537',
                'town' => 'Kisumu',
                'weight' => '17',
                'PickupStation' => 'Kondele',
                'DeliveryAddress' => 'Kondele Quickmart',
                'payment' => 'Now',
                'price' => '456',
            ]

        ];
        foreach ($parcels as $key => $parcel) {
            Parcel::create($parcel);
    }
    }
}
