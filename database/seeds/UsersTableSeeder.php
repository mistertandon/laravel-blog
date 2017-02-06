<?php

use Illuminate\Database\Seeder;

use App\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'parvesht',
            'email' => 'parveshtandon02@gmail.com',
            'password' => Hash::make('0291hdJI'),
        ]);
    }
}
