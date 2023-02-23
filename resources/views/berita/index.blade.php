@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <div class="row ">
            <div class="col-xl-12">
                <div class="page-titles">
                    <div class="d-flex align-items-center">
                        <h2 class="heading">Berita/Kegiatan</h2>
                    </div>
                    <a href="{{ route('berita.insert') }}" class="btn btn-primary mb-2">Tambah</a>
                </div>
            </div>
        </div>
         <!-- --element-area-- -->
         <div class="element-area">
            <div class="demo-view">
                <div class="container-fluid pt-0 ps-0 pe-lg-4 pe-0">
                    <!-- row -->
                    <div class="row">
                        <!-- Column  -->
                        @foreach ($berita as $b)
                        <div class="col-xl-6">
                            <div class="card dz-card overflow-hidden" id="card-title-5">
                                <img class="card-img-top img-fluid" src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/berita') }}/{{ $b->gambar }}" alt="Card image cap">
                                <div class="card-header flex-wrap border-0">
                                    <h6 class="card-title">{{ $b->judul }}</h6>
                                </div>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="CardTitle5" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-footer">
                                            <p class="card-text d-inline">
                                                <div class="d-flex">
                                                <a href="{{ route('berita.edit', $b->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroyBerita{{ $b->id }}"><i class="fa fa-trash"></i></a>
                                                @include('berita.destroy')
                                            </div>
                                        </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /Column  -->
                    </div>

                </div>
            </div>
            <div class="demo-right ">
                <div class="demo-right-inner dlab-scroll " id="right-sidebar">
                    <h4 class="title">Kategori </h4>
                    <ul class="navbar-nav" id="menu-bar">
                        @foreach ($kategori as $k)
                            <li><a href="#{{ $k->id }}" class="scroll">{{ $k->nama }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
@include('dashboard.layout.footer')
