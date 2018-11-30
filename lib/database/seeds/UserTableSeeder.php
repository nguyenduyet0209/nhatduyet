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
        //

        $data = [
        	[
        		'email'=>'nguyenduyet0209@gmail.com',
        		'password'=>bcrypt('20031994'),
        		'level'=>'1'
        	],
        	[
        		'email'=>'hello@nhatduyet.me',
        		'password'=>bcrypt('20031994'),
        		'level'=>'1'
        	],
        ];
        DB::table('vp_users')->insert($data);
    }
}
