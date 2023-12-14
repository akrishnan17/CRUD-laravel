<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class studentviewcontroller extends Controller
{
    public function view($id)
    {
        $user = User::find($id);
        return view('auth.students',['student'=>$user]);
    }
    public function update($id){
        $user = User::find($id);
        if($user){
            if($user->status){
                $user->status = 0;
            }else{
                $user->status = 1;
            }
            $user->save();
        }
        return back();
    }
}
