<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function test()
    {
    	\App\Role::select([
            'roles.id',
            'roles.name',
            \DB::raw('count(users.role_id) as count'),
            \DB::raw('count(permission_role.permission_id) as count2'),
            'roles.created_at',
            'roles.updated_at'
        ])->join('users','users.role_id','=','roles.id')
          ->join('permission_role','permission_role.role_id','=','roles.id')
        ->groupBy('users.role_id');
        echo 'aaaa';
    }
}
