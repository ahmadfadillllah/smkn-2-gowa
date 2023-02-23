<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>{{ config('app.name') }}</title>

	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/owl.carousel.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/fontawesome-all.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/flaticon.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/meanmenu.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/video.min.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/lightbox.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/progess.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/animate.min.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/style.css">
	<link rel="stylesheet" href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/responsive.css">

	<link rel="stylesheet"  href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/switch.css">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-6.css" rel="alternate stylesheet" type="text/css" title="color-6">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-8.css" rel="alternate stylesheet" type="text/css" title="color-8">
	<link href="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/css/colors/color-9.css" rel="alternate stylesheet" type="text/css" title="color-9">

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

	<div id="preloader"></div>


	<div id="switch-color" class="color-switcher">
		<div class="open"><i class="fas fa-cog fa-spin"></i></div>
		<h4>COLOR OPTION</h4>
		<ul>
			<li><a class="color-2" onclick="setActiveStyleSheet('color-2'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-3" onclick="setActiveStyleSheet('color-3'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-4" onclick="setActiveStyleSheet('color-4'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-5" onclick="setActiveStyleSheet('color-5'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-6" onclick="setActiveStyleSheet('color-6'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-7" onclick="setActiveStyleSheet('color-7'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-8" onclick="setActiveStyleSheet('color-8'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
			<li><a class="color-9" onclick="setActiveStyleSheet('color-9'); return true;" href="#!"><i class="fas fa-circle"></i></a> </li>
		</ul>
		<button class="switcher-light">WIDE </button>
		<button class="switcher-dark">BOX </button>
		<a class="rtl-v" href="RTL_Genius/index.html">RTL </a>
	</div>
