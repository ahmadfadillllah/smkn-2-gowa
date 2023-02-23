@include('home.layout.head')
@include('home.layout.header')
<!-- Start of slider section
		============================================= -->
<section id="slide" class="slider-section">
    <div id="slider-item" class="slider-item-details">
        <div class="slider-area slider-bg-1 relative-position">
            <div class="slider-text">
                <div class="section-title mb20 headline text-center ">
                    <div class="layer-1-1">
                        <span class="subtitle text-uppercase">{{ config('app.name') }}</span>
                    </div>
                    <div class="layer-1-3">
                        <h2><span>Layanan</span> Surat</h2>
                    </div>
                </div>
                <div class="layer-1-4">
                    <div id="course-btn">
                        <div class="genius-btn  text-center text-uppercase ul-li-block bold-font">
                            <a href="#">Our Courses <i class="fas fa-caret-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        {{-- <div class="slider-area slider-bg-2 relative-position">
            <div class="slider-text">
                <div class="section-title mb20 headline text-center ">
                    <div class="layer-1-1">
                        <span class="subtitle text-uppercase">EDUCATION & TRAINING ORGANIZATION</span>
                    </div>
                    <div class="layer-1-2">
                        <h2 class="secoud-title"> Browse The <span>Best Courses.</span></h2>
                    </div>
                </div>
                <div class="layer-1-3">
                    <div class="search-course mb30 relative-position">
                        <form action="#" method="post">
                            <input class="course" name="course" type="text"
                                placeholder="Type what do you want to learn today?">
                            <div class="nws-button text-center  gradient-bg text-capitalize">
                                <button type="submit" value="Submit">Search Course</button>
                            </div>
                        </form>
                    </div>
                    <div class="layer-1-4">
                        <div class="slider-course-category ul-li text-center">
                            <span class="float-left">BY CATEGORY:</span>
                            <ul>
                                <li>Graphics Design</li>
                                <li>Web Design</li>
                                <li>Mobile Application</li>
                                <li>Enginering</li>
                                <li>Science</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

    </div>
</section>
<!-- End of slider section
		============================================= -->


<!-- Start popular course
		============================================= -->
<section id="popular-course" class="popular-course-section">
    <div class="container">
        <div class="section-title mb20 headline text-left ">
            <span class="subtitle text-uppercase"></span>
            <h2><span>Berita / Kegiatan</span></h2>
        </div>
        <div id="course-slide-item" class="course-slide">
            @foreach ($berita as $b)
            <div class="course-item-pic-text ">
                <div class="course-pic relative-position mb25">
                    <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/berita') }}/{{ $b->gambar }}"
                        alt="">
                    <div class="course-details-btn">
                        <a href="{{ route('home.berita', $b->slug) }}">COURSE DETAIL <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="course-item-text">
                    <div class="course-meta">
                        <span class="course-category bold-font"><a href="#">Kategori</a></span>
                        <span class="course-author bold-font"><a href="#">{{ $b->kategori->nama }}</a></span>
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
                        <h3><a href="{{ $b->slug }}">{{ $b->judul }}</a> <span
                                class="trend-badge text-uppercase bold-font"><i class="fas fa-bolt"></i> TRENDING</span>
                        </h3>
                    </div>
                    {{-- <div class="course-viewer ul-li">
                        <ul>
                            <li><a href="#"><i class="fas fa-user"></i> 1.220</a></li>
                            <li><a href="#"><i class="fas fa-comment-dots"></i> 1.015</a></li>
                            <li><a href="#">125k Unrolled</a></li>
                        </ul>
                    </div> --}}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End popular course
		============================================= -->

<!-- Start of course teacher
		============================================= -->
<section id="course-teacher" class="course-teacher-section">
    <div class="jarallax">
        <div class="container">
            <div class="section-title mb20 headline text-center ">
                <span class="subtitle text-uppercase"></span>
                <h2>Daftar<span> Guru.</span></h2>
            </div>

            <div class="teacher-list">
                <div class="row justify-content-center">
                    @foreach ($guru as $g)
                    <div class="col-md-3">
                        <div class="teacher-img-content ">
                            <div class="teacher-cntent">
                                <div class="teacher-social-name ul-li-block">
                                    <div class="teacher-name">
                                        <span>{{ $g->user->name }}</span>
                                    </div>
                                </div>
                                <div class="teacher-img-category">
                                    <div class="teacher-img">
                                        <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/avatar') }}/{{ $g->user->avatar }}"
                                            alt="">
                                        <div class="course-price text-uppercase text-center gradient-bg">
                                            <span>{{ $g->mata_pelajaran }}</span>
                                        </div>
                                    </div>
                                    <div class="teacher-category float-right">
                                        <span class="st-name">{{ $g->nip }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of course teacher
		============================================= -->


<!-- Start Course category
		============================================= -->
<section id="course-category" class="course-category-section">
    <div class="container">
        <div class="section-title mb45 headline text-center ">
            <span class="subtitle text-uppercase">Kategori</span>
            <h2>Daftar<span> Kategori berita/kegiatan.</span></h2>
        </div>
        <div class="category-item">
            <div class="row">
                @foreach ($kategori as $k)
                <div class="col-md-3">
                    <div class="category-icon-title text-center ">
                        <div class="category-icon">
                            <i class="text-gradiant flaticon-technology"></i>
                        </div>
                        <div class="category-title">
                            <h4>{{ $k->nama }}</h4>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- /category -->
            </div>
        </div>
    </div>
</section>
<!-- End Course category
		============================================= -->


<!-- Start of contact area
		============================================= -->
<section id="contact-area" class="contact-area-section backgroud-style">
    <div class="container">
        <div class="contact-area-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-left-content ">
                        <div class="section-title  mb45 headline text-left">
                            <span class="subtitle ml42  text-uppercase">CONTACT US</span>
                            <h2><span>Hubungi Kami</span></h2>
                            <p>
                                Jika ada pertanyaan, silahkan hubungi kami atau datang langsung ke lokasi.
                            </p>
                        </div>

                        <div class="contact-address">
                            <div class="contact-address-details">
                                <div class="address-icon relative-position text-center float-left">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="address-details ul-li-block">
                                    <ul>
                                        <li><span>Primary: </span>Last Vegas, 120 Graphic Street, US</li>
                                        <li><span>Second: </span>Califorinia, 88 Design Street, US</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="contact-address-details">
                                <div class="address-icon relative-position text-center float-left">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="address-details ul-li-block">
                                    <ul>
                                        <li><span>Primary: </span>(100) 3434 55666</li>
                                        <li><span>Second: </span>(20) 3434 9999</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="contact-address-details">
                                <div class="address-icon relative-position text-center float-left">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="address-details ul-li-block">
                                    <ul>
                                        <li><span>Primary: </span>info@geniuscourse.com</li>
                                        <li><span>Second: </span>mail@genius.info</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="genius-btn mt60 gradient-bg text-center text-uppercase ul-li-block bold-font ">
                        <a href="#">Contact Us <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="contact-map" class="contact-map-section">
                        <div id="google-map">
                            <div id="googleMaps" class="google-map-container"></div>
                        </div><!-- /#google-map-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of contact area
		============================================= -->
@include('home.layout.footer')
