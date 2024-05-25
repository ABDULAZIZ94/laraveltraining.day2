<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        // DB::table('books')->insert([
        //     'title' => 'Book 1',
        //     'author' => 'Author 1',
        //     'publish_date' => '2024-01-01'
        // ]);

        //using faker
        $faker = Factory::create();
        for ($i = 0; $i < 10; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'publish_date' => $faker->date
            ]);
        }
    }
}
