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
                        <h4 class="card-title">Daftar Siswa</h4>
                        @if (Auth::user()->role == 'admin')
                        <div class="mr-0">
                            <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                            data-bs-target="#insertSiswa">Tambah</button>
                            <button type="button" class="btn btn-success mb-2" data-bs-toggle="modal"
                            data-bs-target="#importSiswa">Import</button>
                        </div>

                        @endif
                    </div>
                    <!-- Modal Harus Disini -->
                    @include('siswa.modal.insert')
                    @include('siswa.modal.import')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kelas</th>
                                        <th>NIS</th>
                                        <th>NISN</th>
                                        <th>Nama Lengkap</th>
                                        @if (Auth::user()->role == 'admin')
                                        <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($siswa as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->kelas->tingkat }} {{ $s->kelas->nama }}</td>
                                        <td>{{ $s->nis }}</td>
                                        <td>{{ $s->nisn }}</td>
                                        <td>{{ $s->nama_siswa }}</td>
                                        @if (Auth::user()->role == 'admin')
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal"
                                                data-bs-target="#editSiswa{{ $s->id }}"><i class="fas fa-pencil-alt"></i></a>
                                                @include('siswa.modal.edit')
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroySiswa{{ $s->id }}"><i class="fa fa-trash"></i></a>
                                                @include('siswa.modal.destroy')
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
