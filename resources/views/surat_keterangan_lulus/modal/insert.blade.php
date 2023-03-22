<div class="modal fade" id="insertKeteranganLulus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('surat_keterangan_lulus.insert') }}" method="POST">
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
                    <label for="">Tahun Pelajaran</label>
                    <input type="text" class="form-control input-rounded" name="tahun_pelajaran" placeholder="2018/2019" required>
                </div>
                <div class="mb-3">
                    <label for="">Tahun Ujian Sekolah</label>
                    <input type="number" class="form-control input-rounded" name="tahun_us" required>
                </div>
                <div class="mb-3">
                    <label for="">Dari Tanggal</label>
                    <input type="date" class="form-control input-rounded" name="dari_tanggal" placeholder="Masukkan Tanggal Surat" required>
                </div>
                <div class="mb-3">
                    <label for="">Sampai Tanggal</label>
                    <input type="date" class="form-control input-rounded" name="sampai_tanggal" placeholder="Masukkan Tanggal Surat" required>
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
