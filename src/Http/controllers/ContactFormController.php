<?php

namespace Littlebyte\Contactform\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Littlebyte\Contactform\Models\ContactForm;

class ContactFormController extends Controller
{
    public function index()
    {
    	return view('contactform::contact');
    }

    public function sendMail(Request $request)
    {
    	ContactForm::create($request->all());
    	return redirect('/contact')
    	->with('status', 'Thank you, your mail has been sent successfully.');
    }
}
