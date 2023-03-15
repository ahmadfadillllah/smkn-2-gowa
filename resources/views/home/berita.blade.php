@include('home.layout.head')
@include('home.layout.header')
<!-- Start of breadcrumb section
		============================================= -->
		<section id="breadcrumb" class="breadcrumb-section relative-position backgroud-style">
			<div class="blakish-overlay"></div>
			<div class="container">
				<div class="page-breadcrumb-content text-center">
					<div class="page-breadcrumb-title">
						<h2 class="breadcrumb-head black bold">Berita/Kegiatan</h2>
					</div>
					<div class="page-breadcrumb-item ul-li">
						<ul class="breadcrumb text-uppercase black">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Berita/kegiatan</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	<!-- End of breadcrumb section
		============================================= -->
        <section id="blog-detail" class="blog-details-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="blog-details-content">
							<div class="post-content-details">
								<div class="blog-detail-thumbnile mb35">
									<img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/berita') }}/{{ $berita->gambar }}" alt="">
								</div>
								<h2>{{ $berita->judul }}</h2>

								<div class="date-meta text-uppercase">
									<span><i class="fas fa-calendar-alt"></i> {{ $berita->updated_at }}</span>
									<span><i class="fas fa-user"></i> ADMIN</span>
								</div>
								<h3>{{ $berita->kategori->nama }}</h3>
								 {!! $berita->isi !!}
							</div>
						</div>
					</div>

					<div class="col-md-3">
						<div class="side-bar">
							<div class="side-bar-search">
								<form action="{{ route('home.cari_berita') }}" method="post">
                                    @csrf
									<input type="text" class="" name="nama" placeholder="Cari Berita">
									<button type="submit"><i class="fas fa-search"></i></button>
								</form>
							</div>

							<div class="side-bar-widget">
								<h2 class="widget-title text-capitalize"><span>Kategori</span></h2>
								<div class="post-categori ul-li-block">
									<ul>
										@foreach ($kategori as $k)
                                        <li class="cat-item"><a href="{{ route('home.kategori', $k->id) }}">{{ $k->nama }}</a></li>
                                        @endforeach

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
@include('home.layout.footer')
