<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = [
            [
                'name' => 'sankalp',
                'email' => 'snakalpup12@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'keyur',
                'email' => 'kbx12@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'vishal',
                'email' => 'vishal@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'aadarsh',
                'email' => 'aadarsh12@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'sunil',
                'email' => 'sunilpo12@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'vaibhav',
                'email' => 'vaibhav23@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'harsh',
                'email' => 'harsh43@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'chirag',
                'email' => 'chirag@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'shubh',
                'email' => 'shubh45@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'jaimin',
                'email' => 'jaimin12@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'dhaval',
                'email' => 'dhaval@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'parth',
                'email' => 'parth@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'rudresh',
                'email' => 'rudresh125@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'rudra',
                'email' => 'rudra78@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ];

        DB::table('users')->insert($users);
    }
}
