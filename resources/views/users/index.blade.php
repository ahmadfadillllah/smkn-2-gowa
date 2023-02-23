@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <div class="row ">
            <div class="col-xl-12">
                <div class="page-titles">
                    <div class="d-flex align-items-center flex-wrap ">
                        <h3 class="heading">Kelola Users</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            @foreach ($users as $u)
            <div class="col-xl-4 col-lg-12 col-sm-12">
                <div class="card overflow-hidden">
                    <div class="text-center p-5 overlay-box" style="background-image: url(images/big/img5.jpg);">
                        <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/avatar') }}/{{ $u->avatar }}" width="100" class="img-fluid rounded-circle" alt="">
                        <h3 class="mt-3 mb-0 text-white">{{ $u->name }}</h3>
                        <p>{{ $u->email }}</p>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="bgl-primary rounded p-3">
                                    <h4 class="mb-0">Role</h4>
                                    <small>{{ $u->role }}</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="bgl-primary rounded p-3">
                                    <h4 class="mb-0">No. HP</h4>
                                    <small>{{ $u->no_hp }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer mt-0">
                        <a href="" class="btn btn-primary btn-lg btn-block"data-bs-toggle="modal"
                        data-bs-target="#resetPassword{{ $u->id }}" >Reset Password</a>
                        @include('users.modal.reset_password')
                        <br>
                        <a href="" class="btn btn-danger btn-lg btn-block"data-bs-toggle="modal"
                        data-bs-target="#destroyAkun{{ $u->id }}" >Hapus Akun</a>
                        @include('users.modal.destroy')
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
