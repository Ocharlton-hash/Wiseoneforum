<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'      => 'Admin',
            'username'  => 'admin',
            'email'     => 'admin@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::ADMIN,
        ]);

        User::factory()->create([
            'name'      => 'Jessica Smith',
            'username'  => 'Jessica',
            'email'     => 'Jessica@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->create([
            'name'      => 'Jermain brown',
            'username'  => 'jermain',
            'email'     => 'jermain@example.com',
            'password'  => bcrypt('password'),
            'type'      => User::DEFAULT,
        ]);

        User::factory()->count(10)->create();
    }
}
