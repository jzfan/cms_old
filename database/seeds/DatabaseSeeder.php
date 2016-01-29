<?php

use Illuminate\Database\Seeder;

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

    	\DB::table('users')->insert(
    		['name'=>'test', 'email'=>'test@test.com', 'password'=>bcrypt('123')]
    		);
    	\DB::table('users')->insert(
    		['name'=>'admin', 'email'=>'admin@admin.com', 'password'=>bcrypt('123')]
    		);
        $this->call(RoleTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(PermRoleSeeder::class);
    }
}
