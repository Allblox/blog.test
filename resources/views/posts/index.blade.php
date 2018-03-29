@extends('layout')

@section('content')

	@foreach ($posts as $post)
		<article>
			<h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
			<p>{{$post->content}}</p>
			<footer>
				{{$post->date_create}} by {{$post->author}}


				@if ($post->date_create != $post->date_update)
					<br><i>Last update: {{$post->date_update}}</i>
				@endif

				<p><a href="/blog/{{$post->id}}">more...</a></p>
			</footer>
			<hr>
		</article>
	@endforeach

@endsection