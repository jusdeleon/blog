<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Awesome Admin Panel</title>
	
	<!-- Style Layout CSS -->
	{{ HTML::style('css/style.css') }}

</head>
<body>

	<header>
		<div class="container">
			<h1>My Blog</h1>
			<p>By Justin de Leon</p>
		</div>
	</header>

	<main class="container">
		@yield('content')
	</main>

	<footer>
		<div class="container">
			&copy; {{ date('Y') }} My Awesome Company
			{{ link_to_route('admin.posts.index', 'Admin') }}
		</div>
	</footer>

</body>
</html>