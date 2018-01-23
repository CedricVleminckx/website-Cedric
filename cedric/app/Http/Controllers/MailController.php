<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

  public function sendMail(Request $request)
  {
   $validatedData = $request->validate([
        'Name' => 'required|max:50',
        'Email' => 'required',
        'Question' => 'required',
    ]);

    Mail::to('vleminckx.cedric@hotmail.com')->send(new ContactMail($request->Name, $request->Email, $request->Question));
    return redirect('Contact')->with('status', 'Email succesfully sent!');
  }
}
