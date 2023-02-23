@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-xl-12">
                <div class="page-titles">
                    <div class="d-flex align-items-center">
                        <h2 class="heading">Struktur Organisasi</h2>
                    </div>
                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#uploadOrganisasi">Ganti / Upload</button>
                </div>
            </div>
        </div>
        <!-- Modal Harus Disini -->
        @include('profilsekolah.struktur_organisasi.modal.upload')
        <div class="card">
            @if ($struktur->struktur_organisasi == NULL)
            <div class="card-header flex-wrap">
                <h5 class="card-title">Belum ada Struktur Organisasi</h5>
            </div>
            @else
            <img class="card-img-top img-fluid"
                src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/struktur') }}/{{ $struktur->struktur_organisasi }}"
                alt="Card image cap">
            @endif

        </div>
    </div>
</div>
@include('dashboard.layout.footer')
