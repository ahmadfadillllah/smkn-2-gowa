@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <div class="row ">
            <div class="col-xl-12">
                <div class="page-titles">
                    <div class="d-flex align-items-center flex-wrap ">
                        <h3 class="heading">Daftar Guru</h3>
                    </div>
                    @if (Auth::user()->role == 'admin')
                    <div class="mr-0">
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#insertGuru">Tambah</button>
                        <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                        data-bs-target="#importGuru">Import</button>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        @include('guru.modal.insert')
        @include('guru.modal.import')
        <!-- row -->
        <div class="row">
            @foreach ($guru as $g)
            <div class="col-xl-4 col-lg-12 col-sm-12">
                <div class="card overflow-hidden">
                    <div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
                        <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/avatar') }}/{{ $g->user->avatar }}" width="100" class="img-fluid rounded-circle" alt="">
                        <h3 class="mt-3 mb-0 text-white">{{ $g->user->name }}</h3>
                        <p>{{ $g->user->email }}</p>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="bgl-primary rounded p-3">
                                    <h4 class="mb-0">NIP</h4>
                                    <small>{{ $g->nip }}</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bgl-primary rounded p-3">
                                    <h4 class="mb-0">Pelajaran</h4>
                                    <small>{{ $g->mata_pelajaran }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (Auth::user()->role == 'admin')
                    <div class="card-footer mt-0">
                        <a href="" class="btn btn-warning btn-lg btn-block"data-bs-toggle="modal"
                        data-bs-target="#editGuru{{ $g->id }}" >Edit Data</a>
                        @include('guru.modal.edit')
                    </div>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
