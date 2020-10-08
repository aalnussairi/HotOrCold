<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function show()
  {
    if (session('logged_in')){
      return redirect('roomselect');
    } else {
      return view('signin');
    }
  }
  
  public function login(Request $request)
  {
    if(User::where('email', $request['email'])->first() && User::where('password', $request['password'])->first()){
      session(['logged_in'=> 1]);
      return view('roomselect');
    } else {
      session(['logged_in'=> 0]);
      return view('signin');
    }
  }

  public function logout()
  {
    session(['logged_in'=> 0]);
    return redirect('home');
  }
}
