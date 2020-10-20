<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<style type="text/css">
		.dark {

			background-color: black;
			color: white;

		}

		.light {
			background-color: white;
			color: black;
		}
	</style>
</head>



<body class="{{ $theme }}">
	@include('Components.header')

	@include('Components.logo')

	@yield('content')

	@if($footer)
	@include('Components.footer')
	@endif
</body>
</html>