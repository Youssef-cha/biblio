<?php

namespace Database\Seeders;

use App\Models\Categorie;
use App\Models\Livre;
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

        // User::factory()->create([
        //     'name' => 'youssef charroud',
        //     'email' => 'youssef.charroud445@gmail.com',
        //     'password' => 'aze123',
        // ]);

        Categorie::factory()->hasLivres(10)->create();
        Categorie::factory(2)->hasLivres(50)->create();
    }
}
