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

        <section id="about-us" class="about-us-section">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="about-resigter-form backgroud-style relative-position">
							<div class="register-content">
								<div class="register-fomr-title text-center">
									<h3 class="bold-font"><span>Layanan Surat</h3>
								</div>
								<div class="register-form-area">
									<form class="contact_form" action="{{ route('home.layanan_send') }}" method="POST">
										@csrf
                                        <div class="contact-info">
											<input class="name" name="nisn" type="text" placeholder="NISN" required>
										</div>
										<div class="contact-info">
											<input class="nbm" name="no_hp" type="number" placeholder="Nomor WhatsApp" required>
										</div>
										<div class="contact-info">
											<input class="email" name="email" type="email" placeholder="Email Address." required>
										</div>
										<select name="surat" required>
											<option selected="">Pilih Layanan Surat</option>
											<option value="Surat Keterangan Siswa Aktif">Surat Keterangan Siswa Aktif</option>
                                            <option value="Surat Izin Kunjungan Siswa">Surat Izin Kunjungan Siswa</option>
                                            <option value="Surat Orang Tua Siswa">Surat Orang Tua Siswa</option>
                                            <option value="Surat Keterangan Berkelakuan Baik Siswa">Surat Keterangan Berkelakuan Baik Siswa</option>
                                            <option value="Surat Keterangan Lulus">Surat Keterangan Lulus</option>
										</select>
										<div class="contact-info">
											<input type="date" id="datepicker" name="tanggal_surat" placeholder="Tanggal Surat" required>
										</div>
										<textarea name="pesan"  placeholder="Message." required></textarea>
										<div class="nws-button text-uppercase text-center white text-capitalize">
											<button type="submit" value="Submit">SUBMIT REQUEST </button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="bg-mockup">
							<img src="{{ asset('home/jthemes.net/themes/html/genius-course') }}/assets/img/about/phone.png" alt="">
						</div>
					</div>
					<!-- /form -->

					<div class="col-md-7">
						<div class="about-us-text">
							<div class="section-title relative-position mb20 headline text-left "  >
								<span class="subtitle ml42 text-uppercase">Layanan Surat</span>
								<h2>Dapatkan Layanan Surat <span>dengan cepat</span></h2>
							</div>
                            <div class="section-title relative-position mb20 headline text-left "  >
								<img src="{{ asset('home/jthemes.net/themes/html/genius-course/assets/img/alur.png') }}" width="500" style="text-align: center">
							</div>
							<div class="about-content-text">
								<div class="about-btn "  >
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="{{ route('home.index') }}">Home<i class="fas fa-caret-right"></i></a>
									</div>
									<div class="genius-btn gradient-bg text-center text-uppercase ul-li-block bold-font">
										<a href="{{ route('home.contact') }}">Saran/masukan<i class="fas fa-caret-right"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@include('home.layout.footer')
