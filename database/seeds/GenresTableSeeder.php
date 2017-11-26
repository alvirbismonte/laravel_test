<?php

use Illuminate\Database\Seeder;
use App\Film;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wonderWomanId = Film::where('name','Wonder Woman 2017')->first()->id;
        $deadPoolId = Film::where('name','Deadpool 2016')->first()->id;
        $justiceLeaugeId = Film::where('name','Justice League 2017')->first()->id;

        DB::table('genres')->insert([
            'film_id' => $wonderWomanId,
            'name' => 'Science Fiction',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('genres')->insert([
            'film_id' => $deadPoolId,
            'name' => 'Fantasy',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('genres')->insert([
            'film_id' => $justiceLeaugeId,
            'name' => 'Science Fiction',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
