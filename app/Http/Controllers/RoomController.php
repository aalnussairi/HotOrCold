<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
      if(session('logged_in')){
        return view('roomselect');
      } else {
        return redirect('login');
      }
    }
    public function show(Request $request)
    {
      $error= '';
      $room = Room::where('id', $request->room)->first();
      return view('userDash', compact('room', 'error'));
    }
}
