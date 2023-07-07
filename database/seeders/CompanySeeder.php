<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $companies = [
            [
                'CompanyName' => 'G4S',
                'branch' => 'Main',
                'address' => 'g4ssupportcustomer@gmail.com',
                'location' => 'Nairobi CBD',
                'pricing' => 345,
                'description' => 'includes dropoff and door to door',
                'about' => 'included in the abouts',

            ],
            [
            'CompanyName' => 'Fargo',
            'branch' => 'Main',
            'address' => 'fargowellssupport@gmail.com',
            'location' => 'Nairobi CBD',
            'pricing' => 674,
            'description' => 'includes dropoff and door to door',
            'about' => 'included in the abouts',
            ],
            [
                'CompanyName' => 'BM',
                'branch' => 'Main',
                'address' => 'bmsupportcare@gmail.com',
                'location' => 'Nairobi CBD',
                'pricing' => 567,
                'description' => 'includes dropoff and door to door',
                'about' => 'included in the abouts',
            ],
            [
                'CompanyName' => 'KK',
                'branch' => 'Main',
                'address' => 'kksupport@gmail.com',
                'location' => 'Nairobi CBD',
                'pricing' => 456,
                'description' => 'includes dropoff and door to door',
                'about' => 'included in the abouts',
            ]

        ];
        foreach ($companies as $key => $company) {
            Company::create($company);
    }
    }
}