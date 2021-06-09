@extends('layouts.app')

@section('content')
	@if(count($journalists) > 0)
		<table border="3px">
			<tr>
				<th>LP</th>
				<th>IMIĘ I NAZWISKO</th>
				<th>OPIS</th>
				<th>WIZERUNEK</th>
			</tr>
			@foreach($journalists as $journalist)
				<tr>
					<td>{{ ++$i }}</td>
					<td><a href="/journalists/{{ $journalist->id }}">{{ $journalist->name }}</a></td>
					<td>{{$journalist->description}}</td>
					<td>-</td>
					<td><a href="/journalists/{{ $journalist->id }}">Edytuj</a></td>
				</tr>
			@endforeach
		</table>
	@else
		<p>Nie dodano dziennikarzy</p>
	@endif
@endsection