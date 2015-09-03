<?php
// header('Access-Control-Allorw-Origin: *');
// header('Access-Control-Allow-Methods: GETPOST, PATCH, PUT, DELETE, OPTIONS');
// header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token,cid');
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('/', function()
// {
//     $data=[];
// });
//use Illuminate\Support\Facades\Mail;

//  Route::get('/',  function()
//  {

//    // return View::make('fonts');
//     return view('index3');

// });

 Route::get('/', array('as' => 'home', function()
 {
   return view('index3');
 }));


 Route::get('index1',  function()
 {

   // return View::make('fonts');
    return view('index1');

});
 Route::get('phpinfo', function() {

 return view('phpinfo');

 });

Route::post('mail_contact','MailController@sendMail');




// Route::get('envoi','MailController@sendMail');
// Route::get('/email', function() 
//    {

//     $data = [ 'titulo' => "titulo mensagem",
//               'destinatario' => "Alguem e destinatario"
//             ];

//     Mail::send('emails.mail', $data, function($message)
//     {
//         $message->to('maplops@gmail.com', 'Mlops78')->subject('welcome');
//     });
// });
// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');
// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
