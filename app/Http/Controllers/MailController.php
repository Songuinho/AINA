<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    protected $data = [];

   public function sendmail(Request $request)
   {
    $request->validate([
        "name" => "required",
        "email" => "required",
        "subject" => "required",
        "message" => "required",
    ]);

    $this->data = [
        "name" => $request->name,
        "email" => $request->email,
        "subject" => $request->subject,
        "message" => $request->message,
    ];

    if($request->hasFile('file')){

        $filename = $request->file('file')->getClientOriginalName();

        $extension = $request->file('file')->getExtension();

        $fullnamefile = $filename . '_' . uniqid() . '.' . $extension;

        $this->data += ["file" => $fullnamefile];
    }


    Mail::send("mailto",$this->data, function ($msg) {
        $this->sending($msg);
       
    });

    return back()->with($request->session()->flash("message", "Message envoye avec succes  !"));
   }

   public function sending($msg)
    {
        $msg->to("espoirsongue85@gmail.com", "AINA")
            ->subject($this->data["subject"])
            ->from($this->data["email"], $this->data["name"]);
    }


    public function subscribe(Request $request){

        $request->validate([
            "email" => "required|email"
        ]);

        Mail::send("mailto",["email" => $request->email], function ($msg) {
            $msg->to("espoirsongue85@gmail.com", "Espoir")
            ->subject($this->data["subject"])
            ->from("aina-@gmail.com", 'aina');
           
        });

        return back()->with($request->session()->flash("message", "Message envoye avec succes  !"));

    }

}
