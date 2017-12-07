<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;

class EmailController extends Controller
{
    function sendMail(Request $request) {
        $this->validate($request, [
            'email' => 'required',
            'mensaje' => 'required',
            'name' => 'max:100'
            ]);

            $data = array(
                'email' => $request->email,
                'name' => $request->name,
                'mensaje' => $request->mensaje
            );

            Mail::send('mail', $data, function($message) use ($data) {
                $message->from($data['email']);
                $message->to('misfinanzasdh@gmail.com');
                $message->subject($data['mensaje']);
            });

            Session::flash('success', 'Tu mail se envió con exito!');

            return view('index');
    }
}
