<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function list()
    {
        $users = DB::table('users')->get()->toJson();
        header("Content-Type: application/json"); //HTTP 1.0
        echo $users;
        exit;        
    }

    /**
     * Show the profile for a given user.
     */
    public function show(string $id)
    {
        $users = DB::table('users')->get()->where('id', $id)->first();

        
        header("Content-Type: application/json");
        echo json_encode($users);
        exit;   
    }
}
