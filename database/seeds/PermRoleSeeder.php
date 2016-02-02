<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\Permission;

class PermRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles_id = Role::lists('id')->toArray();
        $perms_id = Permission::lists('id')->toArray();
        foreach($roles_id as $rid){
        	// $arr = $perms_id;
        	shuffle($perms_id);
        	$offset = mt_rand(1, 4);
        	$arr = array_slice($perms_id, 0, $offset);

        	Role::find($rid)->permissions()->sync($arr);
        }
    }

}
