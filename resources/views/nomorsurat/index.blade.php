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
                        <h4 class="card-title">Daftar Nomor Surat</h4>
                        <div class="mr-4">
                            <button type="button" class="btn btn-rounded btn-secondary"><span
                                class="btn-icon-start text-secondary"><i class="fa fa-download color-secondary"></i>
                            </span>Download</button>
                            <button type="button" class="btn btn-rounded btn-info" data-bs-toggle="modal"
                            data-bs-target="#insertNomorSurat"><span
                                class="btn-icon-start text-info"><i class="fa fa-plus color-info"></i>
                            </span>Tambah</button>
                        </div>
                    </div>
                    <!-- Modal Harus Disini -->
                    @include('nomorsurat.modal.insert')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor Surat</th>
                                        <th>Pembuat</th>
                                        <th>Tanggal Register</th>
                                        <th>Perihal</th>
                                        @if (Auth::user()->role == 'admin')
                                        <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nomor_surat as $n)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $n->id_surat }}/{{ $n->nomor_surat }}</td>
                                        <td>{{ $n->user->name }}</td>
                                        <td>{{ $n->created_at }}</td>
                                        <td>{{ $n->perihal }}</td>
                                        @if (Auth::user()->role == 'admin')
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal"
                                                data-bs-target="#editNomorSurat{{ $n->id }}"><i class="fas fa-pencil-alt"></i></a>
                                                @include('nomorsurat.modal.edit')
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroyNomorSurat{{ $n->id }}"><i class="fa fa-trash"></i></a>
                                                @include('nomorsurat.modal.destroy')
                                            </div>
                                        </td>
                                        @endif
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
