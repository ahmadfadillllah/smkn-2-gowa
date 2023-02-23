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
                        <h4 class="card-title">Daftar Kelas</h4>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#insertKelas">Tambah</button>
                    </div>
                    <!-- Modal Harus Disini -->
                    @include('kelas.modal.insert')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tingkat</th>
                                        <th>Nama Kelas</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->tingkat }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal"
                                                data-bs-target="#editKelas{{ $k->id }}"><i class="fas fa-pencil-alt"></i></a>
                                                @include('kelas.modal.edit')
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroyKelas{{ $k->id }}"><i class="fa fa-trash"></i></a>
                                                @include('kelas.modal.destroy')
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
