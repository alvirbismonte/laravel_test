<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Film;

class CommentsTableSeeder extends Seeder
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

        DB::table('comments')->insert([
            'film_id' => $wonderWomanId,
            'user_id' => User::all()->random()->id,
            'body' => 'Gal Gadot rocks!',
        ]);

        DB::table('comments')->insert([
            'film_id' => $deadPoolId,
            'user_id' => User::all()->random()->id,
            'body' => 'Deadpool kill them all!',
        ]);

        DB::table('comments')->insert([
            'film_id' => $justiceLeaugeId,
            'user_id' => User::all()->random()->id,
            'body' => 'Superman lives!',
        ]);
    }
}
