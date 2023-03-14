<div class="modal fade" id="insertSiswa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('siswa.insert') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Kelas</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="kelas_id" required>
                        <option  data-display="Select" value="">Pilih salah satu</option>
                        @foreach ($kelas as $k)
                        <option  data-display="Select" value="{{ $k->id }}">{{ $k->tingkat }} {{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">NIS</label>
                    <input type="text" class="form-control input-rounded" name="nis" placeholder="Masukkan NIS" required>
                </div>
                <div class="mb-3">
                    <label for="">NISN</label>
                    <input type="text" class="form-control input-rounded" name="nisn" placeholder="Masukkan NISN" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Siswa</label>
                    <input type="text" class="form-control input-rounded" name="nama_siswa" placeholder="Masukkan Nama Siswa" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Panggilan</label>
                    <input type="text" class="form-control input-rounded" name="nama_panggilan" placeholder="Masukkan Nama Panggilan" required>
                </div>
                <div class="mb-3">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control input-rounded" name="tempat_lahir" placeholder="Masukkan Tempat Lahir Siswa" required>
                </div>
                <div class="mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control input-rounded" name="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" required>
                </div>
                <div class="mb-3">
                    <label for="">Agama</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="agama" required>
                        <option  data-display="Select" value="">Pilih salah satu</option>
                        <option  data-display="Select" value="Islam">Islam</option>
                        <option  data-display="Select" value="Kristen">Kristen</option>
                        <option  data-display="Select" value="Katolik">Katolik</option>
                        <option  data-display="Select" value="Hindu">Hindu</option>
                        <option  data-display="Select" value="Budha">Budha</option>
                        <option  data-display="Select" value="Konghucu">Konghucu</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Jenis Kelamin</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="jenis_kelamin" required>
                        <option  data-display="Select" value="">Pilih salah satu</option>
                        <option  data-display="Select" value="Laki-laki">Laki-laki</option>
                        <option  data-display="Select" value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control input-rounded" name="alamat" placeholder="Masukkan Nama Wali" required>
                </div>
                <div class="mb-3">
                    <label for="">No. Handphone</label>
                    <input type="text" class="form-control input-rounded" name="no_hp" placeholder="Masukkan No. Handphone" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Wali</label>
                    <input type="text" class="form-control input-rounded" name="nama_wali" placeholder="Masukkan Nama Wali" required>
                </div>
                <div class="mb-3">
                    <label for="">No. Handphone Wali</label>
                    <input type="text" class="form-control input-rounded" name="no_hp_wali" placeholder="Masukkan No. Handphone Wali" required>
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
