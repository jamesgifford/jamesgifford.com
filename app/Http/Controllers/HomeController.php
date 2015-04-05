<?php namespace App\Http\Controllers;

use Log;
use Mail;
use Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		// TESTING
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

	/**
	 * contact()
	 * 
	 * Send a contact email
	 * @access 	public
	 * @return 	void
	 */
	public function contact ()
	{
		$data = Request::all();

		Mail::send('emails.contact', $data, function($message) use ($data)
		{
			$message->from($data['email'], $data['name']);
			$message->to($_ENV['CONTACT_EMAIL']);
			$message->subject('Contact form submission');
		});

		return redirect('');
	}

}
