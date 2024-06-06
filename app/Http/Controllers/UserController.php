<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('layouts/admin/user');
    }

    public function tambahuser()
    {
        return view('layouts/admin/tambahuser');
    }

    public function edituser()
    {
        return view('layouts/admin/edituser');
    }
}
