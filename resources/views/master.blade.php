<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css')  }}">
    <link rel="stylesheet" href="{{ asset('public/css/main.css')  }}">
	<title>@yield('title')</title>
</head>
<body>
	<div class="contenedor col-sm-8 col-sm-offset-2">
		@yield('content')
	</div>
</body>
</html>