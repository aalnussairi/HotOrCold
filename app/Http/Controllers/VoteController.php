<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Carbon\Carbon;

class VoteController extends Controller
{
  public function index()
    {
      if(session('logged_in')){
        return view('roomselect');
      } else {
        return redirect('roomselect');
      }
    }

  public function vote(Request $request)
  {
    $error = '';
    $room = Room::where('id', $request->_room)->first();
    if($this->timeCalc()){
      if($request->temp == 'Cold!' && $room->current_vote < 100){
        $room->current_vote++;
        session(['last_vote'=>Carbon::now()]);
        $room->save();
      } elseif ($request->temp == 'Cold!' && $room->current_vote <= 100){
        $room->current_vote = 100;
      } elseif ($request->temp == 'Perfect!') {
        if($room->current_vote < 50){
          $room->current_vote++;
          session(['last_vote'=>Carbon::now()]);
          $room->save();
        } elseif ($request->current_vote > 50){
          $room->current_vote--;
          session(['last_vote'=>Carbon::now()]);
          $room->save();
        } else {
          $room->current_vote = 50;
          session(['last_vote'=>Carbon::now()]);
          $room->save();
        }
      } elseif($request->temp == "Hot!" && $room->current_vote >=0) {
        $room->current_vote--;
        session(['last_vote'=>Carbon::now()]);
        $room->save();
      } elseif($request->temp == "Hot!" && $room->current_vote > 0) {
        $room->current_vote = 0;
      }
      else {
        $error = 'something went wrong with the voting logic';
      }
    } else {
      $error = 'please wait for 10 minutes before voting again';
    }

    return view('userDash', compact('room', 'error'));
  }
  public function timeCalc()
  {
    if(!session('last_vote')){
      return true;
    } elseif ((Carbon::now()->diffInSeconds(session('last_vote')))>=600){
      return true;
    } else {
      return false;
    }
  }
}


