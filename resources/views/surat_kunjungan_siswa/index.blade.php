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
                        <h4 class="card-title">Daftar Surat</h4>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#insertKunjunganSiswa">Tambah</button>
                    </div>
                    <!-- Modal Harus Disini -->
                    @include('surat_kunjungan_siswa.modal.insert')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nomor Surat</th>
                                        <th>Pembuat</th>
                                        <th>Nama Siswa</th>
                                        <th>URL SUrat</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kunjungan as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->nomorsurat->id_surat }}/{{ $s->nomorsurat->nomor_surat }}</td>
                                        <td>{{ $s->user->name }}</td>
                                        <td>{{ $s->siswa->nama_siswa }}</td>
                                        <td>{{ route('surat_kunjungan_siswa.download', $s->id) }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('surat_kunjungan_siswa.download', $s->id) }}" class="btn btn-primary shadow btn-xs sharp me-1"target="_blank"><i class="fas fa-envelope"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroyKunjunganSiswa{{ $s->id }}"><i class="fa fa-trash"></i></a>
                                                @include('surat_kunjungan_siswa.modal.destroy')
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