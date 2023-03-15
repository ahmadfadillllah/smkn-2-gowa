@include('home.layout.head')
@include('home.layout.header')
<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Cari Berita</h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Cari Berita</li>
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
									<h2>Daftar Berita</h2>
								</div>
								{{-- {!! $profil->visi !!} --}}
							</div>
							<!-- /about-text -->


						</div>
					</div>
				</div>
                <div class="container">
                    <div id="course-slide-item" class="course-slide">
                        @foreach ($berita as $b)
                        <div class="course-item-pic-text ">
                            <div class="course-pic relative-position mb25">
                                <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/berita') }}/{{ $b->gambar }}"
                                    alt="">
                                <div class="course-details-btn">
                                    <a href="{{ route('home.berita', $b->slug) }}">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="course-item-text">
                                <div class="course-meta">
                                    <span class="course-category bold-font"><a href="#">Kategori</a></span>
                                    <span class="course-author bold-font"><a href="{{ route('home.kategori', $b->kategori->id) }}">{{ $b->kategori->nama }}</a></span>
                                    <div class="course-rate ul-li">
                                        <ul>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                            <li><i class="fas fa-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="course-title mt10 headline pb45 relative-position">
                                    <h3><a href="{{ route('home.berita', $b->slug) }}">{{ $b->judul }}</a> <span
                                            class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
			</div>
		</section>
@include('home.layout.footer')
