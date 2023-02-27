<div class="modal fade" id="insertSuratMasuk">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Surat Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('suratmasuk.insert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Nomor Surat</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="nomorsurat_id" required>
                        <option  data-display="Select" value="">Pilih salah satu</option>
                        @foreach ($nomor_surat as $ns)
                        <option  data-display="Select" value="{{ $ns->id }}">{{ $ns->id_surat }}/{{ $ns->nomor_surat }} ({{ $ns->perihal }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Pengirim</label>
                    <input type="text" class="form-control input-rounded" name="pengirim" placeholder="Masukkan Pengirim" required>
                </div>
                <div class="mb-3">
                    <label for="">Perihal</label>
                    <input type="text" class="form-control input-rounded" name="perihal" placeholder="Masukkan Perihal" required>
                </div>
                <div class="mb-3">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control input-rounded" name="keterangan" placeholder="Masukkan Keterangan" required>
                </div>
                <div class="mb-3">
                    <label for="">Masukkan File</label>
                    <input type="file" class="form-control input-rounded" name="fileku" placeholder="Masukkan File" required>
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
