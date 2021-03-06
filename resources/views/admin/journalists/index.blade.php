@extends('layouts.app1')

@section('content')
	@if(Session::has('success'))
		<p>{{Session::get('success')}}</p>
	@endif
	<h1>Dotychczas dodani dziennikarze</h1>
	<div id="add">
		<a href=" {{route('journalists.create') }}">Dodaj dziennikarza</a>
	</div>
	@if(count($journalists) > 0)
		<table>
			<tr>
				<th>Wizerunek</th>
				<th>IMIĘ I NAZWISKO</th>
				<th>OPIS</th>
				<th>Liczba głosów</th>
				<th>Edytuj</th>
				<th>Usuń</th>
				<th>Pokaż głosy</th>
			</tr>
			@foreach($journalists as $journalist)
				<tr>
					<td><img alt="Grafika przedstawiająca dziennikarza" src="{{ asset($journalist->image) }}"></td>
					<td><a href="{{ route('journalists.show',$journalist->id) }}" id="journalist_name">{{ $journalist->name }}</a></td>
					<td>{{$journalist->description}}</td>
					<td>{{count($journalist->votes)}}</td>
					<td><a href="{{ route('journalists.edit',$journalist->id) }}">Edytuj</a></td>
					<td><a href="{{ route('journalists.destroy',$journalist->id) }}">Usuń</a></td>
					<td><a href="{{ url('journalists/votes',$journalist->id) }}">Pokaż głosy</a></td>
				</tr>
			@endforeach
		</table>
	@else
		<p>Nie dodano dziennikarzy</p>
	@endif
@endsection