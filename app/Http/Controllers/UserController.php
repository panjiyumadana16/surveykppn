<?php

namespace App\Http\Controllers;

use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function notLogin()
    {
        return redirect('/login')->with('alert','Error not loged');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = users::where('u_username',$username)->first();
        if($data){ 
            if(users::where('u_password',$password)->first()){
                Session::put('u_username',$data->username);
                Session::put('u_akses','admin');
                Session::put('u_id',$data->u_id);
                Session::put('u_login',TRUE);
                return redirect('/dashboard');
            }
            else{
                return redirect('/login')->with('alert','Username atau Password Salah!');
            }
        }
        else{
            return redirect('/login')->with('alert','Username atau Password Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/login');
    }
}
