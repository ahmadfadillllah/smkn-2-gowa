@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Surat Masuk</h4>
                        <div class="mr-4">
                            <button type="button" class="btn btn-rounded btn-info" data-bs-toggle="modal"
                            data-bs-target="#insertSuratMasuk"><span
                                class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah</button>
                        </div>
                    </div>
                    <!-- Modal Harus Disini -->
                    @include('suratmasuk.modal.insert')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor Surat</th>
                                        <th>Penerima</th>
                                        <th>Pengirim</th>
                                        <th>Tanggal Masuk</th>
                                        <th>Perihal</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($surat_masuk as $sm)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sm->nomorsurat->id_surat }}/{{ $sm->nomorsurat->nomor_surat }}</td>
                                        <td>{{ $sm->user->name }}</td>
                                        <td>{{ $sm->pengirim }}</td>
                                        <td>{{ $sm->created_at }}</td>
                                        <td>{{ $sm->perihal }}</td>
                                        <td>{{ $sm->keterangan }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ asset('admin/finlab.dexignzone.com/xhtml/file') }}/{{ $sm->fileku }}" class="btn btn-secondary shadow btn-xs sharp me-1" target="_blank"><i class="fas fa-envelope"></i></a>
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal"
                                                data-bs-target="#editSuratMasuk{{ $sm->id }}"><i class="fas fa-pencil-alt"></i></a>
                                                @include('suratmasuk.modal.edit')
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroySuratMasuk{{ $sm->id }}"><i class="fa fa-trash"></i></a>
                                                @include('suratmasuk.modal.destroy')
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
