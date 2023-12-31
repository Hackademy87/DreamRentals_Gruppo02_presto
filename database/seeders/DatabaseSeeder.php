<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Andrea',
            'email' => 'andrea@andrea.com',
            'password' => Hash::make('123456789')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Lorenzo',
            'email' => 'lorenzo@lorenzo.com',
            'password' => Hash::make('123456789')
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Davide',
            'email' => 'davide@davide.com',
            'password' => Hash::make('123456789')
        ]);

    }

}
