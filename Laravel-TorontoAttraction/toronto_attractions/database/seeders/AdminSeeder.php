<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database with an admin user.
     *
     * @return void
     */
    public function run()
    {
        // Check if there's no admin user already in the database
        if (User::where('email', 'admin@example.com')->count() == 0) {
            // Create a new admin user
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'), // Ensure the password is hashed
                'is_admin' => true, // Set the user as an admin
            ]);
        }
    }
}
