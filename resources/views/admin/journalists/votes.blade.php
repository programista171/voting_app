@extends('layouts.app1')

@section('content')
	<h1>Osoby głosujące na dziennikarza: {{$journalist->name}}</h1>
		@foreach($journalist->voters as $voter)
			<table border="2px">
<tr>
<th>IP</th>
<th>USUŃ GŁOS</th>
</tr>
<tr>
<td>
{{$voter->voter->address}}</p>
</td>
<td>
Usuń głos
</td>
</tr>
</table>
		@endforeach
@endsection