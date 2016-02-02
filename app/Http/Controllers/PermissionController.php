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

    public function edit(Permission $Permission)
    {
    	return view('admin.Permission.edit', compact('Permission'));
    }

    public function update(Permission $Permission, Request $request)
    {

    	$Permission->update($request->input());
    	return redirect('/admin/Permission');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return $id;
    }   
}
