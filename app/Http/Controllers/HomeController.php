<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function userform()
    {
        return view('userform');
    }
    public function userlist()
    {
        $users=User::all();
        return view('userlist',compact('users'));
    }
    public function useredit($id)
    {
        $users=User::findOrFail($id);
        return view('useredit',compact('users'));
    }
  
}
