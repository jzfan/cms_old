<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\DataTables\UsersDataTable;

class UserController extends Controller
{
    public function index(UsersDataTable $datatable)
    {
    	// $users = User::all();
    	return $datatable->render('admin.user.index');
    }

}
