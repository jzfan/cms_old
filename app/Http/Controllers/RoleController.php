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

    public function create(Role $role)
    {
        $permissions = Permission::all();
        return view('admin.role.create', compact('role', 'permissions'));
    }

    public function store(Request $request)
    {
        $role = Role::create($request->input());
        return redirect('/admin/role');
    }

    public function edit(Role $role)
    {
        $permissions = Permission::all();
    	return view('admin.role.edit', compact('role', 'permissions'));
    }

    public function update(Role $role, Request $request)
    {
    	$role->update($request->input());
        $permissions = (null !== ($request->input('permissions'))) ? $request->input('permissions') : [];
        $role->permissions()->sync($permissions);
    	return redirect('/admin/role');
    }

    public function destroy(Role $role)
    {
        $name = $role->name;
        \App\User::where('role_id', $role->id)->update(['role_id'=>1]);
        $role->delete();
        return $name;
    }
}
