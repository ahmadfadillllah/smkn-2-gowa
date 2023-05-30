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
                        <h4 class="card-title">Daftar Request Layanan</h4>
                    </div>
                    <!-- Modal Harus Disini -->
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>NISN</th>
                                        <th>No. HP</th>
                                        <th>Request</th>
                                        <th>Status</th>
                                        <th>URL Surat</th>
                                        @if (Auth::user()->role == 'admin')
                                        <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($layanan as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->nisn }}</td>
                                        <td>{{ $k->no_hp }}</td>
                                        <td>{{ $k->surat }}</td>
                                        <td>{{ $k->status }}</td>
                                        <td>{{ $k->keterangan }}</td>
                                        @if (Auth::user()->role == 'admin' and Auth::user()->role == 'guru')
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal"
                                                data-bs-target="#editLayanan{{ $k->id }}"><i class="fas fa-pencil-alt"></i></a>
                                                @include('layanan.modal.edit')
                                                @if ($k->status == 'Selesai')
                                                <a href="#" class="btn btn-success shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#sendSurat{{ $k->id }}"><i class="fa fa-envelope"></i></a>
                                                @include('layanan.modal.send')
                                            </div>
                                            @endif
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
