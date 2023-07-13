<?php

namespace Database\Seeders;

use App\Models\Branches;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branches = [
            [
                'companies_id' => '1',
                'branchname' => 'Bomas',
            ],
            [
                'companies_id' => '1',
                'branchname' => 'Embakasi',
            ],
            [
                'companies_id' => '2',
                'branchname' => 'Bomas',
            ],
            [
                'companies_id' => '2',
                'branchname' => 'Ruiru',
            ],
            [
                'companies_id' => '3',
                'branchname' => 'CBD',
            ],
            [
                'companies_id' => '3',
                'branchname' => 'Kitengela',
            ],
            [
                'companies_id' => '4',
                'branchname' => 'CBD',
            ],
            [
                'companies_id' => '4',
                'branchname' => 'Kabanas',
            ],
        ];

        foreach ($branches as $key => $branch) {
            Branches::create($branch);
        }
    }
}