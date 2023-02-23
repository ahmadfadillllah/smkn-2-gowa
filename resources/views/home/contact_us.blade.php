@include('home.layout.head')
@include('home.layout.header')
<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Saran / <span>Masukan</span></h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Saran/Masukan</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->

        <section id="contact-form" class="contact-form-area_3 contact-page-version">
			<div class="container">
				<div class="section-title mb45 headline text-center">
					<span class="subtitle text-uppercase">Kirimkan kami pesan</span>
					<h2>Saran/masukan anda sangat berarti bagi kami</h2>
				</div>

				<div class="contact_third_form">
					<form class="contact_form" action="{{ route('home.contact_send') }}" method="POST">
                        @csrf
						<div class="row">
							<div class="col-md-3">
								<div class="contact-info">
									<input class="name" name="nama" type="text" placeholder="Masukkan Nama" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="contact-info">
									<input class="email" name="email" type="email" placeholder="Masukkan Email" required>
								</div>
							</div>
                            <div class="col-md-3">
								<div class="contact-info">
									<input class="subject" name="subject" type="subject" placeholder="Masukkan Subject" required>
								</div>
							</div>
							<div class="col-md-3">
								<div class="contact-info">
									<input class="number" name="no_hp" type="number" placeholder="Masukkan Phone Number" required>
								</div>
							</div>
						</div>
						<textarea name="pesan" placeholder="Isi pesan." required></textarea>
						<div class="nws-button text-center  gradient-bg text-uppercase">
							<button type="submit" value="Submit">KRIIM PESAN<i class="fas fa-caret-right"></i></button>
						</div>
					</form>
				</div>
			</div>
		</section>
@include('home.layout.footer')
