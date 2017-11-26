<?php

use Illuminate\Database\Seeder;


class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([
            'name' => 'Wonder Woman 2017',
            'description' => 'A Wonder Woman movie.',
            'release_date' => '2017-05-15',
            'rating' => 5,
            'ticket_price' => 300,
            'country' => 'United States',
            'photo' => 'images\wonderwoman.jpg'
        ]);

        DB::table('films')->insert([
            'name' => 'Deadpool 2016',
            'description' => 'A deadpool movie.',
            'release_date' => '2016-02-10',
            'rating' => 4,
            'ticket_price' => 250,
            'country' => 'United States',
            'photo' => 'images\deadpool.jpg'
        ]);

        DB::table('films')->insert([
            'name' => 'Justice League 2017',
            'description' => 'A Justice League movie.',
            'release_date' => '2017-09-16',
            'rating' => 3,
            'ticket_price' => 250,
            'country' => 'United States',
            'photo' => 'images\deadpool.jpg'
        ]);
    }
}
