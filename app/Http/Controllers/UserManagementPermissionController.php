<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementPermissionController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('menu_user_managemen_role.index');
    }
}
