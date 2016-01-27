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

        $users = array(
    				['name' => 'mohd aminuddin ali', 'email' => 'mohdaminuddinali@gmail.com','password' => bcrypt('superadmin')],
                    ['name' => 'amin amin amin', 'email' => 'battlefileldcompny@gmail.com','password' => bcrypt('superadmin')],
                    ['name' => 'ali', 'email' => 'alibaba@gmail.com','password' => bcrypt('superadmin')]
    				);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
    	DB::table('users')->truncate();

    	foreach ($users as $user) {
    		 DB::table('users')->insert([
    		'name' =>  $user['name'],
    		'email' =>  $user['email'],
    		'password' =>  $user['password']
        ]);
    	}
    }
}
