@extends('layouts.app')

@section('content')
	@if(count($journalists) > 0)
		<table class="table table-bordered">
			<tr>
				<th>LP</th>
				<th>IMIĘ I NAZWISKO</th>
				<th>OPIS</th>
				<th>WIZERUNEK</th>
			</tr>
			@foreach($journalists as $journalist)
				<tr>
					<td></td>
					<td>{{ $journalist->name }}</td>
					<td>{{$journalist->description}}</td>
					<td>-</td>
					<td></td>
				</tr>
			@endforeach
		</table>
	@else
		<p>Nie dodano dziennikarzy</p>
	@endif
@endsection