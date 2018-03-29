<html lang="{{app()->getLocale()}}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">

	<title>Laravel</title>
	<link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
	<script src="{{URL::asset('js/app.js')}}"></script>

</head>
<body>
	<div class="wrapper">
		<div class="container">
			<header class="m-b-md">@include('layouts.header')</header>
			<main class="m-b-md">@yield('content')</main>
			<footer class="m-b-md">@include('layouts.footer')</footer>
		</div>
	</div>
</body>
</html>