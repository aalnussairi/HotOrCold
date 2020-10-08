<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
  public function create()
  {
    return view('/contact');
  }

  public function store(Inquiry $inquiry)
  {
    Inquiry::create($this->validateInquiry());
    return redirect(route('home'));
  }

  protected function validateInquiry()
  {
    return request()->validate([
      'full_name' => 'required',
      'email' => 'required',
      'message' => 'required',
    ]);
  }
}
