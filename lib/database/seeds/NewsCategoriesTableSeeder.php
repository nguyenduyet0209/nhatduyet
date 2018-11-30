<?php

use Illuminate\Database\Seeder;

class NewsCategoriesTableSeeder extends Seeder
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
    			'newscate_name' => 'Thể thao',
    			'newscate_slug' => str_slug('Thể Thao')
    		],
    		[
    			'newscate_name' => 'Thời sự',
    			'newscate_slug' => str_slug('Thời sự')
    		],
    	];
        DB::table('vp_newscategories')->insert($data);
    }
}
