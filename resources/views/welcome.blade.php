<html lang="{{app()->getLocale()}}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Laravel</title>
	<link href="{{URL::asset('css/app.css')}}" rel="stylesheet" type="text/css">
	<script src="{{URL::asset('js/app.js')}}"></script>

</head>
<body>
	<div class="wrapper">
		<div class="container">
			<main class="title m-b-md">
				<h1>...</h1>
				@foreach ($articles as $article)
					<article>
						<h2><a href="/article/{{$article->id}}">{{$article->title}}</a></h2>
						<p>{{$article->content}}</p>
						<footer>
							{{$article->date_create}} — {{$article->author}}

							@if ($article->date_create != $article->date_update)
								<br><i>Last update: {{$article->date_update}}</i>
							@endif
						</footer>
						<hr>
					</article>
				@endforeach
			</main>
		</div>
	</div>
</body>
</html>