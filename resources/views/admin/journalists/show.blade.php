@extends('layouts.app1')

@section('content')

	<img alt="Grafika przedstawiająca dziennikarza" src="{{ asset($journalist->image) }}">
	<h2>Dziennikarz: {{$journalist->name}}</h2>
	<p>{{$journalist->description}}</p>
	<a href="{{ url('journalists/votes',$journalist->id) }}">Pokaż głosy</a>
	<a href="{{ route('journalists.edit',$journalist->id) }}">Edytuj</a>
	<a href="{{ url(redirect()->back()) }}">Wróć</a>
@endsection