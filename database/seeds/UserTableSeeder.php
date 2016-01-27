<?php

use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = array(
    				['name' => 'mohd aminuddin ali', 'email' => 'mohdaminuddinali@gmail.com','password' => bcrypt('superadmin'),'remember_token'=>bcrypt('token1'), 'created_at'=>'2014-01-01 00:00:00', 'updated_at'=>'2014-01-01 00:00:00'],
                    ['name' => 'amin amin amin', 'email' => 'battlefileldcompny@gmail.com','password' => bcrypt('superadmin'),'remember_token'=>bcrypt('token2'), 'created_at'=>'2014-01-01 00:00:00', 'updated_at'=>'2014-01-01 00:00:00'],
                    ['name' => 'ali', 'email' => 'alibaba@gmail.com','password' => bcrypt('superadmin'),'remember_token'=>bcrypt('token3'), 'created_at'=>'2014-01-01 00:00:00', 'updated_at'=>'2014-01-01 00:00:00']
    				);


    	foreach ($users as $user) {
    		 DB::table('users')->insert([
    		'name' =>  $user['name'],
    		'email' =>  $user['email'],
    		'password' =>  $user['password']
        ]);
    	}
    }
}
