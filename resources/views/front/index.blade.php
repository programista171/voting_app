@extends('layouts.app')

@section('content')
<h1>Dziennikarze</h1>
@foreach($journalists as $journalist)
<h2><a href="{{route('journalists.show', $journalist->id)}}">{{$journalist->name}}</a></h2>
@endforeach
@endsection