<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Helpers\helper;
class RegisterController extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required|min:6',
                'dob' => 'required|before: -18 years',
                'gender' => 'required',
                'email' => 'required|email',
                'contact' => 'required|numeric|digits: 10',
                'password' => 'required|confirmed|min:6',
                'address' => 'required|max:255',
                'pincode' => 'required|numeric|digits: 6',
                'state' => 'required'
            ]
            );
            $user = new User;
            $user->name = $request->input('name');
            $user->reg_id = Helper::IDGenerator(new User,'reg_id',5,'USR');
            $user->dob = $request->input('dob');
            $user->gender = $request->input('gender');
            $user->email = $request->input('email');
            $user->contact = $request->input('contact');
            $user->password = Hash::make($request->input('password'));
            $user->address = $request->input('address');
            $user->pincode = $request->input('pincode');
            $user->state = $request->input('state');
            $user->save();
            Auth::login($user);
            return redirect('/login');
             
    }

}
