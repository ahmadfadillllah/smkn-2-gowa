<div class="modal fade" id="editGuru{{ $g->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('guru.update', $g->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">NIP</label>
                    <input type="text" class="form-control input-rounded" name="user_id" value="{{ $g->user_id }}" hidden>
                    <input type="text" class="form-control input-rounded" name="nip" value="{{ $g->nip }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control input-rounded" name="email" value="{{ $g->user->email }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control input-rounded" name="name" value="{{ $g->user->name }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Mata Pelajaran</label>
                    <input type="text" class="form-control input-rounded" name="mata_pelajaran" value="{{ $g->mata_pelajaran }}" required>
                </div>
                <div class="mb-3">
                    <label for="">No. Handphone</label>
                    <input type="text" class="form-control input-rounded" name="no_hp" value="{{ $g->user->no_hp }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control input-rounded" name="avatar" value="{{ $g->user->avatar }}">
                    <br>
                    <a href="{{ asset('admin/finlab.dexignzone.com/xhtml/images/avatar') }}/{{ $g->user->avatar }}" class="btn btn-info" target="_blank">Lihat Gambar</a>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
           </form>
        </div>
    </div>
</div>
