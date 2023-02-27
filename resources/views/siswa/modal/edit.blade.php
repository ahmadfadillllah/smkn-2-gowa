<div class="modal fade" id="editSiswa{{ $s->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('siswa.update', $s->id) }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Kelas</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="kelas_id" required>
                        <option data-display="Select" value="{{ $s->kelas->id }}">{{ $s->kelas->tingkat }} {{ $s->kelas->nama }}</option>
                        @foreach ($kelas as $k)
                        <option  data-display="Select" value="{{ $k->id }}">{{ $k->tingkat }} {{ $k->nama }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">NIS</label>
                    <input type="text" class="form-control input-rounded" name="nis" value="{{ $s->nis }}" required>
                </div>
                <div class="mb-3">
                    <label for="">NISN</label>
                    <input type="text" class="form-control input-rounded" name="nisn" value="{{ $s->nisn }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Siswa</label>
                    <input type="text" class="form-control input-rounded" name="nama_siswa" value="{{ $s->nama_siswa }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Panggilan</label>
                    <input type="text" class="form-control input-rounded" name="nama_panggilan" value="{{ $s->nama_panggilan }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Tempat Lahir</label>
                    <input type="text" class="form-control input-rounded" name="tempat_lahir" value="{{ $s->tempat_lahir }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Tanggal Lahir</label>
                    <input type="date" class="form-control input-rounded" name="tanggal_lahir" value="{{ $s->tanggal_lahir }}" required>
                </div>
                <div class="mb-3">
                    <label for="">No. Handphone</label>
                    <input type="text" class="form-control input-rounded" name="no_hp" value="{{ $s->no_hp }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Nama Wali</label>
                    <input type="text" class="form-control input-rounded" name="nama_wali" value="{{ $s->nama_wali }}" required>
                </div>
                <div class="mb-3">
                    <label for="">No. Handphone Wali</label>
                    <input type="text" class="form-control input-rounded" name="no_hp_wali" value="{{ $s->no_hp_wali }}" required>
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
