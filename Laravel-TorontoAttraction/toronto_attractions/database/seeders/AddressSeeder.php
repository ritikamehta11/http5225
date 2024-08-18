<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressSeeder extends Seeder
{
    public function run()
    {
        DB::table('addresses')->insert([
            [
                'street' => '123 Elm Street',
                'city' => 'Springfield',

                'postal_code' => '62704',
            ],
            [
                'street' => '456 Oak Avenue',
                'city' => 'Shelbyville',

                'postal_code' => '62565',
            ],
            [
                'street' => '789 Maple Ave',
                'city' => 'Toronto',
                'postal_code' => 'M3C 3C3',

            ],
            [
                'street' => '101 Pine Rd',
                'city' => 'Toronto',

                'postal_code' => 'M4D 4D4',
            ]
        ]);
    }
}
