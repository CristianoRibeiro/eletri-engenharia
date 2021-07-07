<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

class ContatoController extends Controller
{

 	public function send(Request $request)
 	{


    	$data = array(
              'nome' => $request->name,
              'email' => $request->email,
              'mensagem' => $request->message,
            );

            Mail::send('emails.info', $data, function($message) use ($data) {
              $message->from($data['email']);
              $message->to('contato@eletriengenharia.com.br');
              $message->subject("Eletri Engenharia - Contato");
            });



               return redirect('/');


 	}
}
