@extends('layouts.app1')

@section('content')
	<h1>Dziennikarze</h1>
	@foreach($journalists as $journalist)
		<img alt="Grafika przedstawiająca dziennikarza" src="{{ asset($journalist->image) }}">
		<h2><a href="{{route('journalists.show',$journalist->id)}}">{{$journalist->name}}</a></h2>
	@endforeach
@endsection