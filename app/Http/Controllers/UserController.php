<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function users () {
        $users = DB::table('users')->get()->toArray();

        return view('welcome')->with("users", $users);
    }
}
