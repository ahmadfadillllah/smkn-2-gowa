<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{ config('app.name') }}" />
	<meta property="og:title" content="{{ config('app.name') }}" />
	<meta property="og:description" content="{{ config('app.name') }}" />
	<meta property="og:image" content="../../finlab.dexignlab.com/xhtml/social-image.png" />
	<meta name="format-detection" content="telephone=no">
	<!-- PAGE TITLE HERE -->
	<title>{{ config('app.name') }}</title>
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/images/favicon.png" />
	<link href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/vendor/wow-master/css/libs/animate.css" rel="stylesheet">
    <link href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/vendor/bootstrap-select-country/css/bootstrap-select-country.min.css">
	<link rel="stylesheet" href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/vendor/jquery-nice-select/css/nice-select.css">
	<link href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/vendor/datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
	<!-- ----swiper-slider---- -->
	<link rel="stylesheet" href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/vendor/swiper/css/swiper-bundle.min.css">
	<!-- Style css -->
	<link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
    <link href="{{ asset('admin/finlab.dexignzone.com/xhtml') }}/css/style.css" rel="stylesheet">

    {{-- Sweet Alert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
	  <div class="loader"></div>
	</div>
    <!--*******************
        Preloader end
    ********************-->
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper" class="wallet-open active">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="javascript:void(0);" class="brand-logo">
				<img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/logo.png') }}" alt="">
				<div class="brand-title">
					<h5>SMKN 2 GOWA</h5>
				</div>

            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
					<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="22" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="11" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="11" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect x="22" y="22" width="4" height="4" rx="2" fill="#2A353A"/>
						<rect y="22" width="4" height="4" rx="2" fill="#2A353A"/>
					</svg>
                </div>
            </div>
        </div>

