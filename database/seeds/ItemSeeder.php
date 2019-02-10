<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'id' => 1,
            'menu_name' => 'Heart',
            'item_name' => 'Heart',
            'logo' => str_random(10),
            'caption' => str_random(20),
            'sub_caption' => str_random(10),
            'short_description' => str_random(20),
            'long_description' => str_random(70)
        ]);

        DB::table('items')->insert([
            'id' => 2,
            'menu_name' => 'Marquise',
            'item_name' => 'Marquise',
            'logo' => str_random(10),
            'caption' => str_random(20),
            'sub_caption' => str_random(10),
            'short_description' => str_random(20),
            'long_description' => str_random(70)
        ]);

        DB::table('items')->insert([
            'id' => 3,
            'menu_name' => 'Octagon',
            'item_name' => 'Octagon',
            'logo' => str_random(10),
            'caption' => str_random(20),
            'sub_caption' => str_random(10),
            'short_description' => str_random(20),
            'long_description' => str_random(70)
        ]);

        DB::table('items')->insert([
            'id' => 4,
            'menu_name' => 'Oval',
            'item_name' => 'Oval',
            'logo' => str_random(10),
            'caption' => str_random(20),
            'sub_caption' => str_random(10),
            'short_description' => str_random(20),
            'long_description' => str_random(70)
        ]);

        DB::table('items')->insert([
            'id' => 5,
            'menu_name' => 'Pear',
            'item_name' => 'Pear',
            'logo' => str_random(10),
            'caption' => str_random(20),
            'sub_caption' => str_random(10),
            'short_description' => str_random(20),
            'long_description' => str_random(70)
        ]);
        DB::table('items')->insert([
            'id' => 6,
            'menu_name' => 'Radiant',
            'item_name' => 'Radiant',
            'logo' => str_random(10),
            'caption' => str_random(20),
            'sub_caption' => str_random(10),
            'short_description' => str_random(20),
            'long_description' => str_random(70)
        ]);
        DB::table('items')->insert([
            'id' => 7,
            'menu_name' => 'RoundBrilliant',
            'item_name' => 'RoundBrilliant',
            'logo' => str_random(10),
            'caption' => str_random(20),
            'sub_caption' => str_random(10),
            'short_description' => str_random(20),
            'long_description' => str_random(70)
        ]);
    }
}
