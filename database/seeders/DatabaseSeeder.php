<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password123'),
            'active' => 'Y',
            'isadmin' => 'N',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
