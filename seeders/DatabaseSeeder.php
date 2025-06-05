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

        User::factory()->create(
            [
            'name' => 'Mas Alex',
            'email' => 'muhammadammarsumadana@mail.ugm.ac.id',
            'password' => bcrypt('Ammar12345'), 
        ]
            );
        User::factory()->create(
            [
            'name' => 'Mas Bruno',
            'email' => 'ammarsumadana10@gmail.com',
            'password' => bcrypt('Ammar12345'), 
        ]);
    }
}
