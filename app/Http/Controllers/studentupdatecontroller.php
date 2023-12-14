<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class studentupdatecontroller extends Controller
{
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'dob' => 'required|before: -18 years',
            'email' => 'required|email',
            'address' => 'required|max: 255',
            'pincode' => 'required|numeric|digits: 6',
            'contact' => 'required|numeric|digits: 10',
            'state' => 'required',
            
            // Add other validation rules for other fields
        ]);

        $user = User::findOrFail($id);
        $user->update($validatedData);

        return redirect()->route('users.view',$user->id);
    }
}