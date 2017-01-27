<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//admin
        User::create([ //1
        	'name' => 'Luis',
        	'email' => 'admin@gmail.com',
        	'password' => bcrypt('admin'),
        	'role' => 0,
        	]);


        //cliente
        User::create([ //2
        	'name' => 'Remso',
        	'email' => 'cliente@gmail.com',
        	'password' => bcrypt('cliente'),
        	'role' => 2,
        	]);
    }
}
