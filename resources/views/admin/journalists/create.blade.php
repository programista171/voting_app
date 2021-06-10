@extends('layouts.app')

@section('content')
	<h1>Dodaj dziennikarza</h1>
	<form action="{{ route('journalist.store') }}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Imię i nazwisko">
		<textarea name="description" placeholder="Wizytówka (kilka słów o dziennikarzu)"></textarea>
		<button type="submit" name="submit">Prześlij</button>
	</form>
@endsection