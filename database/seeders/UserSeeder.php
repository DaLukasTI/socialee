<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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

        $devs = array('wouter', 'noah', 'lukas','toon','kasper');


        foreach ($devs as $dev) {

            User::Create(['name' => $dev, 'email' => $dev . '@socialee.be', 'password' => Hash::make('testtest')]);
        }
    }
}
