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
                        <h4 class="card-title">Kategori Berita</h4>
                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                        data-bs-target="#insertKategori">Tambah</button>
                    </div>
                    <!-- Modal Harus Disini -->
                    @include('kategoriberita.modal.insert')
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kategori as $k)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $k->nama }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp me-1" data-bs-toggle="modal"
                                                data-bs-target="#editKategori{{ $k->id }}"><i class="fas fa-pencil-alt"></i></a>
                                                @include('kategoriberita.modal.edit')
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroyKategori{{ $k->id }}"><i class="fa fa-trash"></i></a>
                                                @include('kategoriberita.modal.destroy')
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
