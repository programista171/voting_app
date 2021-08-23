@extends('layouts.app1')

@section('content')
	<h1>Dodaj dziennikarza</h1>
	<form action="{{ route('journalists.store') }}" method="POST">
		@csrf
		<p>Imię i nazwisko:</p>
		<p><input type="text" name="name" placeholder="Imię i nazwisko"></p>
		<p>Opis dziennikarza:</p>
		<p><textarea name="description" placeholder="Wizytówka (kilka słów o dziennikarzu)"></textarea></p>
		<button type="submit" name="submit">Prześlij</button>
	</form>
@endsection