<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Rianismara",
            'email' => "Rianismara@gmail.com",
            'password' => bcrypt('123'),
            'remember_token' => str_random(60)
        ]);
    }
}
