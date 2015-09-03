<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller {

// 	public function envoi() {

// 		$data = [ 'titulo' => "titulo mensagem",
// 				  'destinatario' => "Alguem e destinatario"
// 				];

// 		Mail::send('emails.mail', $data, function($message)
// 		{
// 			$message->to('maplops@gmail.com', 'Mlops78')->subject('welcome');
// 		});

// 	}

// }

public function sendMail() {

        //Get all the data and store it inside Store Variable
         $data = Input::all();
         if(isset($data['comment'])){
            $data['comment'] = filter_var($data['comment'],FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
         }


        //Validation rules
        $rules = array (
            'name' => 'required', //uncomment if you want to grab this field
            'email' => 'required|email',  //uncomment if you want to grab this field
            'comment' => 'required|min:5'
        );

        //Validate data
        $validator = Validator::make ($data, $rules);


        //If everything is correct than run passes.
        if ($validator -> passes()){

           Mail::send('emails.welcome', $data, function($message) use ($data)
            {
                $message->from($data['email'] , $data['name']); //uncomment if using first name and email fields 
                //$message->from('feedback@gmail.com', 'feedback contact form');
    //email 'To' field: cahnge this to emails that you want to be notified.
                $message->to('maplops@gmail.com', 'Advogado')->subject('Advogado Consulta');
    //$message->to('maplops@gmail.com', 'Advogado')->cc('mlops78@hotmail.com')subject('Advogado Consulta');


            });
            // Redirect to page
   // return Redirect::route('home')
   //  ->with('message', 'Your message has been sent. Thank You!');

    return Redirect::to('/')->with('success', 'Sua Mensagem foi enviada. Obrigado!');
            //return View::make('contact');
         }else{
   //return contact form with errors
            return Redirect::route('home')
             ->with('error', 'Erro ao processar formulário. Preenchimento errado ou nulo!');

         }
     }
} 

