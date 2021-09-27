@extends('layouts.main')

@section('title', 'Контакты')

@section('content')
<h1>Страница контактов</h1>
<form action="{{route('contact-form')}}" method="post" class='col-6'>
	@csrf
	<div class="form-group mt-3">
		<label for="name">Name</label>
		<input type="text" name='name' id='name' class='form-control' placeholder="Введите ваше имя">
	</div>

	<div class="form-group mt-3">
		<label for="email">Email</label>
		<input type="email" name='email' id='email' class='form-control' placeholder="Введите ваш email">
	</div>

	<div class="form-group mt-3">
		<label for="subject">Subject</label>
		<input type="text" name='subject' id='subject' class='form-control' placeholder="Введите тему сообщения">
	</div>

	<div class="form-group mt-3">
		<label for="message">Message</label>
		<textarea name="message" id="message" class='form-control' placeholder="Введите сообщение"></textarea>
	</div>

	<button type='submit' class='btn btn-success mt-3'>Send</button>
</form>
@endsection