<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Mail;

class PagesController extends Controller
{
    /**
     * The site homepage
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Send email from contact form
     */
    public function send_mail(Request $request)
    {
        $post = $request->all();
        $content = $_POST['message'];

        if (isset($_POST['email'])) {
            Mail::send('emails/contact', ['content' => $content], function ($message) use ($post) {
                $message->from($post['email'], $post['name']);
                $message->to(env('MAIL_TO'))->subject('Contact Form Submission');
            });
        }

        return redirect('');
    }
}
