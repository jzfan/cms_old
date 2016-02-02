<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\DataTables\UsersDataTable;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(UsersDataTable $dataTable)
    {
        return $dataTable->render('admin.user.index');
    }

    public function edit(User $user)
    {
        $roles = Role::lists('id', 'name');
    	return view('admin.user.edit', compact('user', 'roles'));
    }

    public function update(User $user, Request $request)
    {
        $user->update($request->input());
        return redirect('/admin/user');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
    	return $id;
    }

    public function create(){
        \Auth::logout();
        return redirect('/register');
    }

}
