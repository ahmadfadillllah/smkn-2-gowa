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
                        <h4 class="card-title">Saran atau Masukan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>No. HP</th>
                                        <th>Subject</th>
                                        <th>Pesan</th>
                                        @if (Auth::user()->role == 'admin')
                                        <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($saran as $s)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $s->nama }}</td>
                                        <td>{{ $s->email }}</td>
                                        <td>{{ $s->no_hp }}</td>
                                        <td>{{ $s->subject }}</td>
                                        <td>{{ $s->pesan }}</td>
                                        @if (Auth::user()->role == 'admin')
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp" data-bs-toggle="modal"
                                                data-bs-target="#destroySaran{{ $s->id }}"><i class="fa fa-trash"></i></a>
                                                @include('saran.destroy')
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
