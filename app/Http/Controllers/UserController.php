<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function userstore(Request $request)
    {
        $userData=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
            'address'=>'required|string',
            'date'=>'required|date',
            'state'=>'required',
            'profileimage'=>'nullable|image|mimes:jpeg,png,jpeg',
            'gender'=>'required',
        ]);
        $userData['password']=bcrypt( $userData['password']);
        User::create($userData);
        return redirect()->route('userform');
    }

    public function userupdate($id,Request $request)
    {
         $users=User::findOrFail($id);
         $userData=$request->validate([
            'email'=>'required|email',
            'password'=>'required',
            'address'=>'required|string',
            'date'=>'required|date',
            'state'=>'required',
            'profileimage'=>'nullable|image|mimes:jpeg,png,jpeg',
            'gender'=>'required',
        ]);
        $users->update($userData);
        return redirect()->route('userlist');

    }
    public function userdelete($id)
    {
        $users=User::findOrFail($id);
        $users->delete();
        return redirect()->route('userlist');
    }
 
}
