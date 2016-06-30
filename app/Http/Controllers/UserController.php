<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
class UserController extends Controller
{
    //
    public function login(Request $request)
    {
        if (!Session::has('user_id')) {
            $name = $request->input('Username');
            $password = $request->input('Password');

            /** check in DB here */

            $user = User::where('name', $name)->first();
            if (count($user)) {
                if ($user->password == $password) {
                    // echo "YOU ARE LOGIN";
                    $user_data = array
                    (
                        'id' => $user->id,
                        'name' => $user->name,
                        'photo' => $user->photo,
                        'type' => $user->type,
                        'message' => 'logged in'
                    );
                    session(['user_id' => $user->id]);
                    session(['type' => $user->type]);
                    session(['name'=>$user->name]);
                    return view('loggedin', compact('user_data'));

                } elseif ($user->password != $password) {
                    $user_data = array('message' => 'password error');
                    return view('login', compact('user_data'));
                }
            } else {
                $user_data = array('message' => 'name error');
                return view('login', compact('user_data'));
            }
        }
        else /** there is a user logged in already */
        {
            $id=session()->get('user_id');
//            dd($id);
            $user = User::where('id', $id)->first();
            $user_data = array
            (
                'id' => $user->id,
                'name' => $user->name,
                'photo' => $user->photo,
                'type' => $user->type,
                'message' => 'logged in'
            );
            return view('loggedin', compact('user_data'));
        }

    }

    public function logout(Request $request){
        $request->session()->flush();
        return Redirect::to('/');

    }

}
