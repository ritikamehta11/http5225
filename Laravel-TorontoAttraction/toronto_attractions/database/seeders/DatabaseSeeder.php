<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            AddressSeeder::class,
            AttractionSeeder::class,
            AdminSeeder::class
        ]);
    }
}
