<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => fake()->name(),
        //     'email' => fake()->unique()->safeEmail(),
        //     'password' => Hash::make('password'),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        User::factory(100)->create();
    }
}
