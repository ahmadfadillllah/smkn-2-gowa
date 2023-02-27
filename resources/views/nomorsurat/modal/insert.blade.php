<div class="modal fade" id="insertNomorSurat">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Nomor Surat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('nomorsurat.insert') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">ID Surat</label>
                    <input type="text" class="form-control input-rounded" name="id_surat" placeholder="Masukkan ID Surat (001)" required>
                </div>
                <div class="mb-3">
                    <label for="">Nomor Surat</label>
                    <input type="text" class="form-control input-rounded" name="nomor_surat" placeholder="S/3343/L/2023" required>
                </div>
                <div class="mb-3">
                    <label for="">Perihal</label>
                    <input type="text" class="form-control input-rounded" name="perihal" placeholder="Masukkan Perihal" required>
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
