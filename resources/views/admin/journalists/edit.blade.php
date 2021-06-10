@extends('layouts.app')

@section('content')
	<h1>Edytuj informacje o dziennikarzu</h1>
	<form action="{{ route('journalists.update',$journalist->id) }}" method="POST">
@method('put')
		@csrf
		<input type="text" name="name" value="{{ $journalist->name }}" placeholder="Imię i nazwisko">
		<textarea name="description" placeholder="Wizytówka (kilka słów o dziennikarzu):">{{ $journalist->description }}</textarea>
		<button type="submit" name="submit">Prześlij</button>
	</form>
@endsection