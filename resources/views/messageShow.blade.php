@extends('layouts.main')

@section('title'){{$message->subject}}@endsection

@section('content')
<h1>{{$message->subject}}</h1>
<p>{{$message->message}}</p>
<p>{{$message->name}} - {{$message->email}}</p>
<p>{{$message->created_at}}</p>
<a href="" class="btn btn-success">Редактировать</a>
<a href="" class="btn btn-danger">Удалить</a>
@endsection