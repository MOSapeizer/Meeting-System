<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<title>@yield('title')</title>
</head>
<body>
	@section('header')
		this is header
	@show

	<div id="app" class="container">
		@yield('content')
	</div>

	@section('footer')
		this is footer
	@show
	{{-- <script src="https://unpkg.com/vue/dist/vue.js"></script> --}}
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
	<script src="{{ mix('/js/app.js') }}"></script>
</body>
</html>