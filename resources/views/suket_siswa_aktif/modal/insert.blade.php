<div class="modal fade" id="insertSuketSiswaAktif">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('suket_siswa_aktif.insert') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Nomor Surat</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="nomorsurat_id" required>
                        <option  data-display="Select" value="">Pilih salah satu</option>
                        @foreach ($nomor_surat as $ns)
                        <option  data-display="Select" value="{{ $ns->id }}">{{ $ns->id_surat }}/{{ $ns->nomor_surat }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Siswa</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="siswa_id" required>
                        <option  data-display="Select" value="">Pilih salah satu</option>
                        @foreach ($siswa as $s)
                        <option  data-display="Select" value="{{ $s->id }}">{{ $s->nama_siswa }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Tempat Lahir</label>
                    <input type="number" class="form-control input-rounded" name="tahun_lulus" placeholder="2023" required>
                </div>
                <div class="mb-3">
                    <label for="">Tanggal Surat</label>
                    <input type="date" class="form-control input-rounded" name="tanggal" placeholder="Masukkan Tanggal Surat" required>
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
