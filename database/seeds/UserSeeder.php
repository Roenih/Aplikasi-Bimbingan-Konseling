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
            'name' => "Admin",
            'email' => "admin123@gmail.com",
            'password' => bcrypt('admin123'),
            'remember_token' => str_random(60)
        ]);
    }
}
