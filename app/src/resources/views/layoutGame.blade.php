<!DOCTYPE html>
<html lang="en">
<head>
	<title>Santi y Luli - El juego - @yield('title')</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/game/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/game/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/game/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/game/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/game/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/game/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/game/css/util.css">
	<link rel="stylesheet" type="text/css" href="/game/css/main.css">
<!--===============================================================================================-->
    @yield('styles')
</head>
<body>

	<div class="bg-contact3" >
		<div class="container-contact3">
			<div class="wrap-contact3 .wrap-contact3-show">
				
                            @yield('content')
                            
			</div>
		</div>
	</div>


	<script src="/game/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="/game/vendor/bootstrap/js/popper.js"></script>
	<script src="/game/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/game/js/main.js"></script>
        @yield('scripts')
</body>
</html>
