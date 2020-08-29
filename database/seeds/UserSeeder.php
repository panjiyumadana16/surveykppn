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
        	'u_username' => 'admin',
        	'u_password' => 'admin',
        	'created_at' => now(),
        	'updated_at' => now(),
        ]);
    }
}
