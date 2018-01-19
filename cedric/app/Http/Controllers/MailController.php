<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
  public function sendMail(Request $request)
 {
    Mail::to('vleminckx.cedric@hotmail.com')->send(new ContactMail($request->Name, $request->Email, $request->Question));
    return redirect()->back();
 }
}
