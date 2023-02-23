@include('home.layout.head')
@include('home.layout.header')
<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Tentang</h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Tentang</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->
        <section id="about-page" class="about-page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="about-us-content-item">

							<div class="about-text-item">
								<div class="section-title-2  headline text-left">
									<h2>Visi<span> Sekolah</span></h2>
								</div>
								{!! $profil->visi !!}
							</div>
							<!-- /about-text -->

                            <br>
                            <div class="about-text-item">
								<div class="section-title-2  headline text-left">
									<h2>Misi<span> Sekolah</span></h2>
								</div>
								{!! $profil->misi !!}
							</div>

                            <br>
                            <div class="about-text-item">
								<div class="section-title-2  headline text-left">
									<h2>Sejarah<span> Sekolah</span></h2>
								</div>
								{!! $profil->sejarah !!}
							</div>

                            <br>
                            <div class="about-text-item">
								<div class="section-title-2  headline text-left">
									<h2>Struktur<span> Organisasi</span></h2>
								</div>
								<img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/struktur') }}/{{ $profil->struktur_organisasi }}" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@include('home.layout.footer')
