<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    protected $data = [];

    public function sendmail(Request $request)
    {
        $validatorData = $request->validate([
            "name" => "required",
            "email" => "required",
            "subject" => "required",
        ]);

        $this->data = [
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
            "file" => " "
        ];

        if ($request->hasFile('file')) {

            $filename = $request->file('file')->getClientOriginalName();

            $extension = $request->file('file')->getExtension();

            $fullnamefile = $filename . '_' . uniqid() . '.' . $extension;

            $this->data["file"] = $fullnamefile;
        }

        // dd($this->data["name"]);

        try {
            Mail::send(

                "view_mail",

                [
                    "name" => $this->data["name"],

                    "email" => $this->data["email"],

                    "subject" => $this->data["subject"],

                    "message" => $this->data["message"],

                    "file" => $this->data["file"]
                ],
                function ($msg) {
                    $this->sending($msg);
                }
            );

            return redirect()->back()->with($request->session()->flash("message", "Message envoyé avec succès !"))->withErrors($validatorData);
        } catch (\Exception $e) {
            return redirect()->back()->with($request->session()->flash('Errormessage', 'Ooupssss!!! problème de connexion svp! veillez réesayer plus tard. Si le problème persiste bien vouloir nous joindre par Mail (aina.redaction@yahoo.com) ou appelez nous au +237 698 307 457. '));
        }
    }

    public function sending($msg)
    {
        $msg->to("ainaredaction02@gmail.com", "AINA")
            ->subject($this->data["subject"])
            ->from($this->data["email"], $this->data["name"]);
    }


    public function subscribe(Request $request)
    {

        $validatorEmail = $request->validate([
            "emailsubscribe" => "required|email"
        ]);

        $this->data = ["mail" => $request->emailsubscribe];
        dd($request->session());

        try {
            Mail::send("subscribe_mail", ["email" => $request->emailsubscribe], function ($msg) {
                $msg->to("ainaredaction02@gmail.com", "Aina")
                    ->from($this->data["mail"], 'client');
            });


            return redirect()->back()->with($request->session()->flash("subscribemessage", "Souscription effectuée avec succès !"))->withErrors($validatorEmail);
        } catch (\Exception $e) {
            return redirect()->back()->with($request->session()->flash('Errorsubscribemessage', 'Ooupssss!!! problème de connexion svp! veillez réesayer plus tard. Si le problème persiste bien vouloir nous joindre par Mail (aina.redaction@yahoo.com) ou appelez nous au +237 698 307 457. '));
        }
    }
}
