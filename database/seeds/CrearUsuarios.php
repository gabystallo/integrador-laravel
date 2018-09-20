<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrearUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'email' => 'gaby86@gmail.com',
        	'name' => 'Gaby',
        	'password' => bcrypt('mandioca'),
        	'remember_token' => str_random(60)
        ]);
    }
}
