<?php

namespace Database\Seeders;

use App\Models\Services;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'companies_id' => '1',
                'service1' => 'Delivery of parcels',
                'service2' => 'K9 Services',
                'service3' => 'Personal protection',
                'service4' => 'Alarm response',
                'service5' => 'Security to personal properties and Companies',
                'service6' => 'Security Dog training',
                'service7' => 'Alarm and CCTV installations',
                'service8' => 'Relocating persons and service is offered countrywide',
                'service9' => 'Door-to-door delivery of items',
                'service10' => 'Abroad shipments',
            ],
            [
                'companies_id' => '2',
                'service1' => 'Delivery of all items',
                'service2' => 'K9 Services',
                'service3' => 'Personal protection',
                'service4' => 'Alarm response',
                'service5' => 'Security to personal properties and Companies',
                'service6' => 'Security Dog training',
                'service7' => 'Alarm and CCTV installations',
                'service8' => 'Relocating persons and service is offered countrywide',
                'service9' => 'Door-to-door delivery of items',
                'service10' => 'Abroad shipments',
            ],
            [
                'companies_id' => '3',
                'service1' => 'Delivery of all items',
                'service2' => 'K9 Services',
                'service3' => 'Personal protection',
                'service4' => 'Alarm response',
                'service5' => 'Security to personal properties and Companies',
                'service6' => 'Security Dog training',
                'service7' => 'Alarm and CCTV installations',
                'service8' => 'Relocating persons and service is offered countrywide',
                'service9' => 'Door-to-door delivery of items',
                'service10' => 'Abroad shipments',
            ],
            [
                'companies_id' => '4',
                'service1' => 'Delivery of all items',
                'service2' => 'K9 Services',
                'service3' => 'Personal protection',
                'service4' => 'Alarm response',
                'service5' => 'Security to personal properties and Companies',
                'service6' => 'Security Dog training',
                'service7' => 'Alarm and CCTV installations',
                'service8' => 'Relocating persons and service is offered countrywide',
                'service9' => 'Door-to-door delivery of items',
                'service10' => 'Abroad shipments',
            ],
        ];
        foreach($services as $key => $service){
            Services::create($service);
        }
    }
}