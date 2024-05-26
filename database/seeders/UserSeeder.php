<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'     => 'Timothy Brady',
                'email'    => 'abc@gmail.com',
                'password' => Hash::make('Password'),
            ],
            [
                'name'     => 'Timothy Brady',
                'email'    => 'lalalal@gmail.com',
                'password' => Hash::make('Password'),
            ],
        ];
        User::insert($users);
        // User::create([
        //     'name'     => 'Timothy Brady',
        //     'email'    => 'abc@gmail.com',
        //     'password' => Hash::make('Password'),
        // ],
    
    // );
        // User::create([
        //         'name'     => 'kejia',
        //         'email'    => 'bllbalbl@gmail.com',
        //         'password' => 'lalal',  

        // ],
    
    // );
    }
}
