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
            'username' => 'admin',
            'name' => str_random(15),
            'surname' => str_random(15),
            'email' => str_random(10).'@maillocalhost.co',
            'password' => bcrypt('admin'),
        ]);

        DB::table('users')->insert([
            'username' => 'test',
            'name' => 'demo',
            'surname' => 'user',
            'email' => str_random(10).'@maillocalhost.co',
            'password' => bcrypt('test'),
        ]);

    }
}
