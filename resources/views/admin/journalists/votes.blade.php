@extends('layouts.app1')

@section('content')
	<h1>Osoby głosujące na dziennikarza: {{$journalist->name}}</h1>
			<table border="2px">
<tr>
<th>IP</th>
<th>USUŃ GŁOS</th>
</tr>
		@foreach($journalist->voters as $voter)
<tr>
<td>
{{$voter->voter->address}}</p>
</td>
<td>
Usuń głos
</td>
</tr>
		@endforeach
</table>
@endsection