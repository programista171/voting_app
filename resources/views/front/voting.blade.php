@extends('layouts.app')

@section('content')
	@if(count($journalists) > 0)
		<table border="3px" class="table table-bordered">
			<tr>
				<th>LP</th>
				<th>IMIĘ I NAZWISKO</th>
				<th>OPIS</th>
				<th>WIZERUNEK</th>
				<th>Zagłosuj</th>
			</tr>
			@foreach($journalists as $journalist)
				<tr>
					<td></td>
					<td>{{ $journalist->name }}</td>
					<td>{{$journalist->description}}</td>
					<td></td>
					<td>
@if(!in_array($journalist->id, $wereVoted))
@if(count($voter->votes)<5)
<form action="{{ route('voting.update',$journalist->id) }}" method="POST">
@csrf
@method('put')
<input type="hidden" name="id" value="{{ $journalist->id }}">
<button type="submit">Zagłosuj</button>
</form>
@else
<p>Oddano maksymalną liczbę głosów</p>
@endif
@else
<p>Zagłosowano</p>
@endif
</td>
				</tr>
			@endforeach
		</table>
	@else
		<p>Nie dodano dziennikarzy</p>
	@endif
@endsection