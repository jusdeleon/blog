<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Awesome Admin Panel</title>
	
	<!-- Admin Layout CSS -->
	{{ HTML::style('css/admin.css') }}

</head>
<body>

	<header>
		<div class="container">
			<h1>My Awesome Admin Panel</h1>
		</div>
	</header>

	<main class="container">
		@yield('content')
	</main>

	<footer>
		<div class="container">
			&copy; {{ date('Y') }} My Awesome Company
		</div>
	</footer>

</body>
</html>