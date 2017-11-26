<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Peter Piper',
            'email' => 'peter@email.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'David Beckhum',
            'email' => 'david@email.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('users')->insert([
            'name' => 'Arthur Mcarthur',
            'email' => 'arthur@email.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
