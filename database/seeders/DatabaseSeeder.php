<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador'
        ]);

        Role::create([
            'name' => 'pilot',
            'display_name' => 'Piloto'
        ]);

        User::factory()->create([
            'name' => 'ADRIANA ARDILA',
            'email' => 'adrianayesid@gmail.com',
            'password' => bcrypt('adriana12345'),
        ])->assignRole(['admin']);

        User::factory()->create([
            'name' => 'OMAR YESID DE ARDILA',
            'email' => 'omaryesid@gmail.com',
            'password' => bcrypt('omar12345'),
        ])->assignRole(['pilot', 'admin']);

        User::factory()->create([
            'name' => 'HERNANDO CARVAJAL',
            'email' => 'hernando@gmail.com',
            'password' => bcrypt('hernando12345'),
        ])->assignRole(['pilot']);

        User::factory(50)->create()->each(function ($user) {
            $user->assignRole(['pilot']);
        });

        $this->call([
            BuyerSeeder::class,
        ]);
    }
}
