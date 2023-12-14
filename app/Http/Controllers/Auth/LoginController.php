<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        $email=$request->input('email');
        $password=$request->input('password');
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            $user = User::where('email',$email)->first();
            Auth::login($user);
            return redirect('/list');
        }else{
            return back()->withErrors(['Invalid credentials']);
        }
    }
}
