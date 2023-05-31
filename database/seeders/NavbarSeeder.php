<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Navbar;
class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $links = [
            [
                'name' => 'Home',
                'route' => 'home',
                'ordering' => 1,
                // 'status' => 'Enabled',
            ],
            [
                'name' => 'Inhouse Parcels',
                'route' => 'inhouse',
                'ordering' => 2,
                // 'status' => 'Enabled',
            ],
            [
                'name' => 'Customers',
                'route' => 'customers',
                'ordering' => 3,
                // 'status' => 'Enabled',
            ],
            [
                'name' => 'Parcel Request',
                'route' => 'parcelrequests',
                'ordering' => 4,
                // 'status' => 'Enabled',    
            ],
            [
                'name' => 'Movable Units',
                'route' => 'mus',
                'ordering' => 5,
                // 'status' => 'Enabled',
            ],
            [
                'name' => 'Company Profile',
                'route' => 'company',
                'ordering' => 6,
                // 'status' => 'Enabled',
            ]
            
        ];
  
        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
    }
}
}