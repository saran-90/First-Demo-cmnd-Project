<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class MailController extends Controller
{
    public function contactmail(Request $request){
     Mail::send('mail',
       array(
           'sendername' => $request->get('sendername'),
           'senderemail' => $request->get('senderemail'),
           'sendercompanyname' => $request->get('sendercompanyname'),
           'senderservice' => $request->get('senderservice'),
           'sendermessage' => $request->get('sendermessage'),

       ), function($message)
   {
       $message->from('info@gmail.com');
       $message->to('info@gmail.com', 'Genewtech')->subject('JR Associates');
   });
 
    return back()->with('successmsg', 'Thank you for contacting us!'); 
   }
}
