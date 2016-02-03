<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Permission;
use App\DataTables\PermissionsDataTable;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
	public function index(PermissionsDataTable $datatable)
	{
		return $datatable->render('admin.Permission.index');
	}

    public function edit(Permission $perm)
    {
    	return view('admin.Permission.edit', compact('perm'));
    }

    public function update(Permission $perm, Request $request)
    {
    	$perm->update($request->input());
    	return redirect('/admin/perm');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return $id;
    }   
}
