@extends('layouts.app')

@section('content')
<h2>Dziennikarz: {{$journalist->name}}</h2>
<p>{{$journalist->description}}</p>
<a href="{{ redirect()->back() }}">Wróć</a>
@endsection