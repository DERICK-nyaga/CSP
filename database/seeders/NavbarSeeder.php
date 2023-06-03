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
            ],
            [
                'name' => 'Inhouse',
                'route' => 'inhouse',
                'ordering' => 2,
            ],
            [
                'name' => 'Customers',
                'route' => 'customers',
                'ordering' => 3,
            ],
            [
                'name' => 'Dropoffs',
                'route' => 'requests',
                'ordering' => 4,
            ],
            [
                'name' => 'MU',
                'route' => 'mus',
                'ordering' => 5,
            ],
            [
                'name' => 'Profile',
                'route' => 'profile',
                'ordering' => 6,
            ]

        ];

        foreach ($links as $key => $navbar) {
            Navbar::create($navbar);
    }
}
}