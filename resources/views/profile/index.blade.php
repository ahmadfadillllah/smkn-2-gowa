@include('dashboard.layout.head')
@include('dashboard.layout.header')
@include('dashboard.layout.sidebar')
<div class="content-body">
    <div class="container-fluid">
        @include('notif.index')
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo rounded"></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{ asset('admin/finlab.dexignzone.com/xhtml/images/avatar') }}/{{ Auth::user()->avatar }}" class="img-fluid rounded-circle" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{ Auth::user()->name }}</h4>
                                    <p>{{ Auth::user()->role }}</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{ Auth::user()->email }}</h4>
                                    <p>Email</p>
                                </div>
                                <div class="dropdown ms-auto">
                                    <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal"
                                    data-bs-target="#changeAvatar">Ganti Avatar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('profile.modal.change_avatar')
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#about-me" data-bs-toggle="tab" class="nav-link active show">About Me</a>
                                    </li>
                                    <li class="nav-item"><a href="#profile-settings" data-bs-toggle="tab" class="nav-link">Ganti Informasi</a>
                                    </li>
                                    <li class="nav-item"><a href="#password-settings" data-bs-toggle="tab" class="nav-link">Ganti Password</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="about-me" class="tab-pane fade active show">
                                        <br>
                                        <div class="profile-personal-info mb-5">
                                            <h5 class="text-primary mb-4">Personal Information</h5>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Nama <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ Auth::user()->name }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">Email <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="row mb-2">
                                                <div class="col-sm-3 col-5">
                                                    <h5 class="f-w-500">No. Handphone <span class="pull-end">:</span>
                                                    </h5>
                                                </div>
                                                <div class="col-sm-9 col-7"><span>{{ Auth::user()->no_hp }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profile-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h5 class="text-primary">Account Setting</h5>
                                                <form action="{{ route('profile.change_info') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="form-label">Nama</label>
                                                        <input type="text" value="{{ Auth::user()->name }}" name="name" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">Email</label>
                                                        <input type="text" value="{{ Auth::user()->email }}" name="email" class="form-control" required>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label">No. Handphone</label>
                                                        <input type="text" value="{{ Auth::user()->no_hp }}" name="no_hp" class="form-control" required>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update Info</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="password-settings" class="tab-pane fade">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h5 class="text-primary">Ganti Password</h5>
                                                <form action="{{ route('profile.change_password') }}" method="POST">
                                                    @csrf
                                                    <div class="row">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Password Lama</label>
                                                            <input type="password" placeholder="password" name="password_lama" class="form-control" required>
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="form-label">Password Baru</label>
                                                            <input type="password" placeholder="Password" name="password_baru" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Ganti</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="replyModal">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Post Reply</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <textarea class="form-control" rows="4">Message</textarea>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Reply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('dashboard.layout.footer')
