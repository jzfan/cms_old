<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement("SET foreign_key_checks = 0");
    	\DB::table('users')->truncate();
    	\DB::table('permission_role')->truncate();
        \DB::table('permissions')->truncate();
        \DB::table('roles')->truncate();

        \DB::table('roles')->insert(['name'=>'无']);
        $role = \DB::table('roles')->insertGetId(['name'=>'superman']);
    	\DB::table('users')->insert(
    		['name'=>'test', 'email'=>'test@test.com', 'role_id'=>$role, 'password'=>bcrypt('123')]
    		);
    	\DB::table('users')->insert(
    		['name'=>'admin', 'email'=>'admin@admin.com', 'role_id'=>$role, 'password'=>bcrypt('123')]
    		);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(PermRoleSeeder::class);
        $this->call(CategorySeeder::class);
        \DB::statement("SET foreign_key_checks =1");
    }
}
