<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'KEVIN DAVID ESCOBAR',
            'email' => 'escobarkevin567@gmail.com',
            'password' => bcrypt('kevin12345'),
        ]);

        User::factory()->create([
            'name' => 'ADRIANA Y YESID',
            'email' => 'adrianayesid@gmail.com',
            'password' => bcrypt('adriana12345'),
        ]);
    }
}
