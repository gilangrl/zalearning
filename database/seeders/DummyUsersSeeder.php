<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData =[
            [
                'name'      => 'Admin operator',
                'email'     => 'operator@localhost.com',
                'role'      => 'operator',
                'password'  =>bcrypt('123456')
            ],
            [
                'name'      => 'User',
                'email'     => 'user@localhost.com',
                'role'      => 'user',
                'password'  =>bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val)
        {
            User::create($val);
        }
    }
}
