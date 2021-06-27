<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>Dziennikarze</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
@include('layouts.menu')
@yield('content')
@include('layouts.footer')
</body>
</html>