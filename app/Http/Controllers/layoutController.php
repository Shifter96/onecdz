<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class layoutController extends Controller
{
    public function user() {
        $username = user::get();
        $usermail = user::get(); 
        return view('/')->with([
       'name',$username,
       'email',$usermail,
        ]);
    }
}

