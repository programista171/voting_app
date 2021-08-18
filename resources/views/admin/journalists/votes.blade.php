@extends('layouts.app1')

@section('content')
	<h1>Osoby głosujące na dziennikarza: {{$journalist->name}}</h1>
		@foreach($journalist->voters as $voter)
			<P>{{$voter->address}}</p>
		@endforeach
@endsection