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
                        @if (Auth::user()->role == 'admin')
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#insertKelas">Tambah</button>
                        @endif
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
                                        @if (Auth::user()->role == 'admin')
                                        <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kelas as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->tingkat }}</td>
                                        <td>{{ $k->nama }}</td>
                                        @if (Auth::user()->role == 'admin')
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
