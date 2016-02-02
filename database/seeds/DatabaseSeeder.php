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

    	\DB::table('users')->delete();
    	\DB::table('roles')->delete();
    	\DB::table('permissions')->delete();
    	\DB::table('permission_role')->delete();

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

    }
}
