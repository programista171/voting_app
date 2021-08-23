<!DOCTYPE HTML>
<html lang="pl">
	<head>
		@include('layouts.styl')
		<meta charset="UTF-8">
		<link href="app.css" rel="stylesheet"><title>Dziennikarze</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<script src='https://code.jquery.com/jquery-3.5.1.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js'></script>
	</head>
	<body>
		<div id="zaw">
			@include('layouts.menu')
			@yield('content')
			@include('layouts.footer')
		</div>
	</body>
</html>