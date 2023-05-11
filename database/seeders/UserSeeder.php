<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
                'username'  => 'admin',
                'name'  =>  'Admin mahesafest',
                'level' =>  'admin',
                'email' =>  'admin@mahesafest.com',
                'password'  => bcrypt('admin1234'),

            ],
            [
                'username'  => 'user',
                'name'  =>  'user mahesafest',
                'level' =>  'user',
                'email' =>  'user@mahesafest.com',
                'password'  => bcrypt('user1234'),
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
