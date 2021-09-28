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

		return redirect()->route('home')->with('success', 'Сообщение отправленно успешно');
	}

	public function allData()
	{
		return view('messages', ['data' => Contact::all()]);
	}

	public function messageShow($id)
	{
		return view('messageShow', ['message' => Contact::find($id)]);
	}

	public function messageEdit($id)
	{
		return view('messageEdit', ['message' => Contact::find($id)]);
	}

	public function messageEditSubmit($id, ContactRequest $request)
	{
		$contact = Contact::find($id);
		$contact->name = $request->input('name');
		$contact->email = $request->input('email');
		$contact->subject = $request->input('subject');
		$contact->message = $request->input('message');

		$contact->save();

		return redirect()->route('message-show', $id)->with('success', 'Сообщение изменнено успешно');
	}

	public function messageDelete($id)
	{
		Contact::find($id)->delete();
		return redirect()->route('contact-data')->with('success', 'Сообщение удалено успешно');
	}
}
