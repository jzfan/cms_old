<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Role;
use App\DataTables\RolesDataTable;
use Illuminate\Http\Request;
use App\Permission;

class RoleController extends Controller
{
    public function index(RolesDataTable $datatable)
    {
    	return $datatable->render('admin.role.index');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
    	return view('admin.role.edit', compact('role', 'permissions'));
    }

    public function update(Role $role, Request $request)
    {
    	$role->update($request->input());
        $role->permissions()->sync($request->input('permissions'));
    	return redirect('/admin/role');
    }

    public function destroy($id)
    {
        Role::findOrFail($id)->delete();
        return $id;
    }   
}
