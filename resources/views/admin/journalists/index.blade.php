@extends('layouts.app')

@section('content')
@if(isset($success))
<p>{{$success}}</p>
@endif
<h1>Dotychczas dodani dziennikarze</h1>
<a href="/admin/journalists/create">Dodaj dziennikarza</a>
	@if(count($journalists) > 0)
		<table border="3px" class="table table-bordered">
			<tr>
				<th>LP</th>
				<th>IMIĘ I NAZWISKO</th>
				<th>OPIS</th>
<th>Liczba głosów<th>
				<th>WIZERUNEK</th>
			</tr>
			@foreach($journalists as $journalist)
				<tr>
					<td></td>
					<td><a href="{{ route('journalists.edit',$journalist->id) }}">{{ $journalist->name }}</a></td>
					<td>{{$journalist->description}}</td>
<td>{{count($journalist->votes)}}</td>
					<td>-</td>
					<td><a href="{{ route('journalists.edit',$journalist->id) }}">Edytuj</a></td>
				</tr>
			@endforeach
		</table>
	@else
		<p>Nie dodano dziennikarzy</p>
	@endif
@endsection