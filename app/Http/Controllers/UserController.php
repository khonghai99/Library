<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function myProfile(){
        return view('Users.my-profile');
    }
}
