@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <!-- row -->
        <div class="row ">
            <div class="col-xl-12">
                <div class="page-titles">
                    <div class="d-flex align-items-center">
                        <h2 class="heading">Review</h2>
                    </div>
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                    data-bs-target="#insertReviews">Tambah</button>
                </div>
            </div>
        </div>
        @include('reviews.modal.insert')
        <div class="row">
            <!-- --column-- -->
            <div class="col-xl-12">
                <div class="user_reviews overflow-hidden">
                    <h4 class="heading mb-3"> User Reviews</h4>
                    @foreach ($reviews as $r)
                    <div class="swiper mySwiper position-relative ">
                        <div class="swiper-wrapper ">
                            <!-- ---swiper-slide--- -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card-header justify-content-start border-0 pb-0 p-4">
                                        <div class="slide-img me-3">
                                            <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/avatar') }}/{{ $r->user->avatar }}"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div>
                                            <h4>{{ $r->user->name }}</h4>
                                            <span>{{ $r->user->role }}</span>
                                        </div>
                                    </div>
                                    <div class="card-body p-4">
                                        <p class="mb-0">{{ $r->pesan }}</p>
                                    </div>
                                </div>
                            </div>

                            <!-- ---/swiper-slide--- -->
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- --/column-- -->
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
