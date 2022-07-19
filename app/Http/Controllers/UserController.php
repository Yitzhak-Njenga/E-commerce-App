<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function login(Request $request){

        $user = User::where(['email'=>$request->email])->first();


        if (!$user || !Hash::check($request->password,$user->password))
        {
          return "User or password is not matched";
        }
        else{
            $request->session()->put('user',$user);
            return redirect('/products');
        }

    }

    public function register(Request $request){

        $user = new User();
        $user->name =$request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->passsword);
        $user->save();

        return redirect('/login');

    }
}
