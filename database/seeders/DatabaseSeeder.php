<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'youssef charroud',
            'email' => 'youssef.charroud445@gmail.com',
            'password' => 'aze123',
        ]);

        Livre::factory(100)->create();
    }
}
