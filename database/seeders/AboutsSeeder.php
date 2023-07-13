<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $abouts = [
            [
                'company_id' => '1',
                'branch' => 'main',
                'mobile' => '+254774843434',
                'email' => 'g4ssupportcustomer@gmail.com',
                'avenue' => 'Moi',
                'street' => 'Tom Mboya',
                'building' => 'Anniversary Towers',
                'floor' => '34',
                'roomnumber' => '645',
                'weekdaysopening' => '07:20',
                'weekendsopening' => '08:05',
                'weekdaysclosing' => '18:45',
                'weekendsclosing' => '16:00',
            ],
            [
                'company_id' => '2',
                'branch' => 'main',
                'mobile' => '+254787888',
                'email' => 'fargowellssupport@gmail.com',
                'avenue' => 'Kenyatta',
                'street' => 'Meghji',
                'building' => 'NBO',
                'floor' => '12',
                'roomnumber' => '56',
                'weekdaysopening' => '07:20',
                'weekendsopening' => '08:05',
                'weekdaysclosing' => '18:45',
                'weekendsclosing' => '16:00',
            ],
            [
                'company_id' => '3',
                'branch' => 'main',
                'mobile' => '+2547879633',
                'email' => 'bmsupportcare@gmail.com',
                'avenue' => 'Kenyatta',
                'street' => 'Ronald Ngala',
                'building' => 'Fleecom',
                'floor' => '46',
                'roomnumber' => '767',
                'weekdaysopening' => '07:20',
                'weekendsopening' => '08:05',
                'weekdaysclosing' => '18:45',
                'weekendsclosing' => '16:00',
            ],
            [
                'company_id' => '4',
                'branch' => 'main',
                'mobile' => '+2547879899',
                'email' => 'kksupport@gmail.com',
                'avenue' => 'Moi',
                'street' => 'Kimathi',
                'building' => 'Afya center',
                'floor' => '09',
                'roomnumber' => '878',
                'weekdaysopening' => '07:20',
                'weekendsopening' => '08:05',
                'weekdaysclosing' => '18:45',
                'weekendsclosing' => '16:00',
            ],
        ];
        foreach($abouts as $key => $about){
            About::create($about);
        }
    }
}
