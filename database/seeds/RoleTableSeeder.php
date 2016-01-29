<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory('App\Role',5)->create()->each(function($r){
    		$r->users()->saveMany(factory('App\User', mt_rand(2,5))->make());
    	});
    }
}
