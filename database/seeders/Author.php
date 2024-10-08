<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Author extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake  = "Faker\Factory::create()";

        DB::table('authors')->insert([
            'user_id' => 1,
            'name' => 'The ENIAC',
            'slug' => 'the-eniac',
            'email' => 'eniac@mail.com',
            'photo' => 'https://www.wallart.com/media/catalog/product/cache/871f459736130e239a3f5e6472128962/w/1/w10388-small.jpg',
            'bio' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis et elementum tellus. Nulla.'
        ]);
    }
}
