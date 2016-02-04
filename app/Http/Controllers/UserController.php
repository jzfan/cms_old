<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\DataTables\UsersDataTable;
use App\Http\Requests\UserEditRequest;

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

    public function update(User $user, UserEditRequest $request)
    {
        $user->update($request->input());
        return redirect('/admin/user');
    }

    public function destroy(User $user)
    {
        $name = $user->name;
        $user->delete();
    	return $name;
    }

    public function create(){
        \Auth::logout();
        return redirect('/register');
    }

}
