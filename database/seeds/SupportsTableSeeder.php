<?php

use Illuminate\Database\Seeder;
use App\User;

class SupportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //support project 1
        User::create([ //3
        	'name' => 'Joel',
        	'email' => 'soporte1@gmail.com',
        	'password' => bcrypt('soporte'),
        	'role' => 1,
        	]);

        User::create([ //4
        	'name' => 'Antony',
        	'email' => 'soporte2@gmail.com',
        	'password' => bcrypt('soporte'),
        	'role' => 1,
        	]);
    }
}
