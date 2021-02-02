<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){


        $users = User::paginate(25);
        return view('admin.users.index',['users' => $users]);
    }


}
