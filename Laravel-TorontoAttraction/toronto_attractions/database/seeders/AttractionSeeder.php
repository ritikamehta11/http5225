<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttractionSeeder extends Seeder
{
    public function run()
    {
        DB::table('attractions')->insert([
            [
                'name' => 'Springfield Zoo',
                'category' => 'Zoo',
                'description' => 'A large zoo with many exotic animals.',
                'address_id' => 1, // Assuming the ID 1 exists in the addresses table
            ],
            [
                'name' => 'Shelbyville Museum',
                'category' => 'Museum',
                'description' => 'A museum showcasing local history.',
                'address_id' => 2, // Assuming the ID 2 exists in the addresses table
            ],
            [
                'name' => 'CN Tower',
                'description' => 'A popular tourist attraction in Toronto offering panoramic views.',
                'address_id' => 3,
            ],
            [
                'name' => 'Royal Ontario Museum',
                'description' => 'A museum that showcases art, culture, and nature.',
                'address_id' => 4,
            ],
            [
                'name' => 'Ripley\'s Aquarium',
                'description' => 'An aquarium featuring a wide variety of marine life.',
                'address_id' => 4
            ]
            // Add more attractions here
        ]);
    }
}
