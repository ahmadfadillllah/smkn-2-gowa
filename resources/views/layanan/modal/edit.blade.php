<div class="modal fade" id="editLayanan{{ $k->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Layanan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('layanan.update', $k->id) }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">NISN</label>
                    <input type="text" class="form-control input-rounded" name="nama" value="{{ $k->nisn }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="">Request</label>
                    <input type="text" class="form-control input-rounded" name="nama" value="{{ $k->surat }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="">Status</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="status">
                        <option {{ $k->status == "Proses" ? "Proses" : ""}} value="{{ $k->status }}">{{ $k->status }}</option>
                        <option  data-display="Select" value="Proses">Proses</option>
                        <option  data-display="Select" value="Selesai">Selesai</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">URL Surat</label>
                    <input type="text" class="form-control input-rounded" name="keterangan" value="{{ $k->keterangan }}">
                </div>
                <div class="mb-3">
                    <label for="">Pesan</label>
                   <textarea cols="30" class="form-control" rows="10" readonly>{{ $k->pesan }}</textarea>
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
