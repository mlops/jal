<?php namespace App\Http\Controllers;

use Input;
use Redirect;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/
protected $mailer;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	 public function __construct(MailQueue($mailer))
	 {
	// 	$this->middleware('auth');
	$this->mailer = $mailer;
	 }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

}
