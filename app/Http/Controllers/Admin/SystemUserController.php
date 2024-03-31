<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SystemUserController extends Controller
{
    public function show()
    {
        return view('branch.users.systemusers');
    }
}
