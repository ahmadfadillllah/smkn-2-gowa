<div class="modal fade" id="editSuratMasuk{{ $sm->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Surat Masuk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('suratmasuk.update', $sm->id) }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Nomor Surat</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="nomorsurat_id" required>
                        <option data-display="Select" value="{{ $sm->nomorsurat_id }}">{{ $sm->nomorsurat->id_surat }}/{{ $sm->nomorsurat->nomor_surat }} ({{ $sm->nomorsurat->perihal }})</option>
                        @foreach ($nomor_surat as $ns)
                        <option  data-display="Select" value="{{ $ns->id }}">{{ $ns->id_surat }}/{{ $ns->nomor_surat }} ({{ $ns->perihal }})</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Pengirim</label>
                    <input type="text" class="form-control input-rounded" name="pengirim" value="{{ $sm->pengirim }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Perihal</label>
                    <input type="text" class="form-control input-rounded" name="perihal" value="{{ $sm->perihal }}" required>
                </div>
                <div class="mb-3">
                    <label for="">Keterangan</label>
                    <input type="text" class="form-control input-rounded" name="keterangan" value="{{ $sm->keterangan }}" required>
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
