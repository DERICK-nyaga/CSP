<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserNav;

class UserNavSeeder extends Seeder
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
            ],
            [
                'name' => 'Prices',
                'route' => 'prices',
                'ordering' => 2,
            ],
            [
                'name' => 'Description',
                'route' => 'description',
                'ordering' => 3,
            ],
            [
                'name' => 'Contact Us',
                'route' => 'contacts',
                'ordering' => 4,
            ]

        ];
        foreach ($links as $key => $usernav) {
            UserNav::create($usernav);
    }
    }
}
