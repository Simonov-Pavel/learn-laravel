@extends('layouts.main')

@section('title', 'Все сообщения')

@section('content')
<h1>Все сообщения</h1>
@foreach($data as $item)
<div class="alert alert-info">
	<h3>{{$item->subject}}</h3>
	<p>{{$item->name}} - {{$item->created_at}}</p>
	<p><small>{{$item->email}}</small></p>
	<a href="{{route('message-show', $item->id)}}" class='btn btn-success'>Подробнее</a>
</div>
@endforeach
@endsection