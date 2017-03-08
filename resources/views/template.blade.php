<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width initial-scale=1">
	<title>LaravelApp</title>
	<link href="{{ asset ('bootsrap_3_3_7/css/bootstrap.min.js') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
	@yield('main')
	@yield('footer')
</body>
</html>