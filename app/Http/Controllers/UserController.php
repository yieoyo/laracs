<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(["email"=>$req->email])->first();
        if($user && Hash::check($req->password, $user->password)){
            $req->session()->put('user',$user);
           return redirect('/');
        } else {
            return "user pass no match";
        }
    }
    function register(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect('/login');
    }
}
