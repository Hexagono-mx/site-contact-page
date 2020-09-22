<?php

namespace Hexagono\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Hexagono\Contact\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{


    public function index() {
        return view('contact::page-layout');
    }
    public function send(Request $request) {
        $validator = $request->validate([
            'name'    => 'required',
            'email'   => 'required|email',
            'phone'   => 'required|digits:10',
            'message' => 'required'
        ]);

        /*if ($validator->fails()) {
            return redirect(route('contacto'))
                ->withErrors($validator)
                ->withInput();
        }*/

        Mail::to(config('contact.send-mail-to'))
            ->cc(config('contact.send-cc'))
            ->bcc(config('contact.send-bcc'))
            ->send(new ContactMail($request->name, $request->email, $request->phone, $request->message));
        return redirect()->route('contacto', 'success');
    }
}
