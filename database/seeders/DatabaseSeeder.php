<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Lang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin Super',
            'email' => 'admin@email.com',
            'password' => 'admin',
            'is_admin' => true,
        ]);
        if (empty(Lang::exists())) {
            Lang::factory()->create([
                'country' => 'USA',
                'code' => 'en',
            ]);
            Lang::factory()->create([
                'country' => 'Azərbaycan',
                'code' => 'az',
            ]);
        }
    }
}
