<!DOCTYPE HTML>
<html lang="pl">
<head>
<meta charset="UTF-8">
<style>
ul {
  list-style-type: none;
  margin-top: -20px;
  margin-left: -20px;
  margin-right: -20px;
  border-radius: 25px 25px 0px 0px;
  width: 100%
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

body {
margin: 0px;
padding: 0px;
background-color: rgb(0, 128, 255);
}

#zaw {
background-color: rgba(255, 255, 255, 0.8);
padding: 20px;
margin: 20px;
position: absolute;
left: 20%;
right: 20%;
height: 90%;
border-radius: 25px;
}

img {
width: 120px;
height: 160px;
}

footer {
position: absolute;
bottom: 0;
}
</style>
<title>Dziennikarze</title>
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