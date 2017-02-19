<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
	<title>@yield('title')</title>
</head>
<body>
	<div id="app">
		<app-navbar></app-navbar>

		@yield('content')

		<app-footer></app-footer>
	</div>

	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
	<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>