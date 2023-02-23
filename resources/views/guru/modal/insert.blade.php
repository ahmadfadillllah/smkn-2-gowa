<div class="modal fade" id="insertGuru">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('guru.insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">NIP</label>
                    <input type="text" class="form-control input-rounded" name="nip" placeholder="Masukkan NIP" required>
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input type="email" class="form-control input-rounded" name="email" placeholder="Masukkan Email" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control input-rounded" name="name" placeholder="Masukkan Nama" required>
                </div>
                <div class="mb-3">
                    <label for="">Password</label>
                    <input type="password" class="form-control input-rounded" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="mb-3">
                    <label for="">Mata Pelajaran</label>
                    <input type="text" class="form-control input-rounded" name="mata_pelajaran" placeholder="Masukkan Mata Pelajaran" required>
                </div>
                <div class="mb-3">
                    <label for="">No. Handphone</label>
                    <input type="text" class="form-control input-rounded" name="no_hp" placeholder="Masukkan No. Handphone" required>
                </div>
                <div class="mb-3">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control input-rounded" name="avatar" placeholder="Masukkan Gambar" required>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
           </form>
        </div>
    </div>
</div>
