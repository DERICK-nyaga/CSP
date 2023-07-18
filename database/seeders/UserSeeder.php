<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'fname' => 'jane',
                'lname' => 'doe',
                'username' => 'janedoe',
                'email' => 'janedoe@gmail.com',
                'mobile' => '254789890',
                'password' => '1',
            ],
            [
                'fname' => 'john',
                'lname' => 'doe',
                'username' => 'john doe',
                'email' => 'johndoe@gmail.com',
                'mobile' => '3564546',
                'password' => '1',
            ],
            [
                'fname' => 'jose',
                'lname' => 'opera',
                'username' => 'opera',
                'email' => 'opera@gmail.com',
                'mobile' => '478229',
                'password' => '1',
            ],
            [
                'fname' => 'colonel',
                'lname' => 'nyaga',
                'username' => 'colonel nyaga',
                'email' => 'colonel@gmail.com',
                'mobile' => '2535364',
                'password' => '1',
            ],
        ];
        foreach($users as $key => $user){
            User::create($user);
        }
    }
}