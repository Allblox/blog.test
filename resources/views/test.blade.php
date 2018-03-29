<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
</head>
<body>
	<nav>
		@foreach ($nav_list as $nav_item)
			<li>{{$nav_item}}</li>
		@endforeach
	</nav>
	<h1>Test №1</h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores omnis aliquam totam laborum ut assumenda, odio similique, dicta rerum quisquam numquam quos voluptatum tenetur expedita.</p>

</body>
</html>