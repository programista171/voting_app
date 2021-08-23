@extends('layouts.app1')

@section('content')
	<h1>Dziennikarze</h1>
	@foreach($journalists as $journalist)
		<img alt="Grafika przedstawiająca dziennikarza" src="{{ asset($journalist->image) }}">
		<h2>{{$journalist->name}}</h2>
		<p>{{$journalist->description}}</p>
	@endforeach
{!!$journalists->links()!!}
@endsection