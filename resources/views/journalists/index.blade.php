@extends('layouts.app')

@section('content')
	@if(count($journalists) > 0)
		<table>
			<tr>
				<td>LP</td>
				<td>IMIĘ I NAZWISKO</td>
				<td>OPIS</td>
				<td>WIZERUNEK</td>
			</tr>
			@foreach($journalists as $journalist)
				<tr>
					<td>0</td>
					<td>{{$journalist->name}}</td>
					<td>{{$journalist->description}}</td>
					<td>-</td>
				</tr>
			@endforeach
		</table>
	@else
		<p>Nie dodano dziennikarzy</p>
	@endif
@endsection