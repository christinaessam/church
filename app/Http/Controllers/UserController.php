<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        $name=$request->input('Username');
        $password=$request->input('Password');

        /** check in DB here */
        /**/

        return view('loggedin',compact('name'));
    }

}
