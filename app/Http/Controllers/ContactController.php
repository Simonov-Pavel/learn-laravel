<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function index()
	{
		return view('contact');
	}

	public function submit(ContactRequest $request)
	{
		$contact = new Contact();
		$contact->name = $request->input('name');
		$contact->email = $request->input('email');
		$contact->subject = $request->input('subject');
		$contact->message = $request->input('message');

		$contact->save();

		return redirect()->route('home')->session('success', 'Сообщение отправленно успешно');
	}
}
