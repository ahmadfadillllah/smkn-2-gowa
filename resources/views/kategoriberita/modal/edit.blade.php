<div class="modal fade" id="editKategori{{ $k->id }}">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kategori</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('kategoriberita.update', $k->id) }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Nama</label>
                    <input type="text" class="form-control input-rounded" name="nama" value="{{ $k->nama }}">
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
