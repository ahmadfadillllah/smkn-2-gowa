<div class="modal fade" id="importGuru">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Guru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('guru.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Import File Excel</label>
                    <input type="file" class="form-control input-rounded" name="file" required>
                </div>

                <a href="{{ asset('guru.xlsx') }}" style="color:aqua">Unduh Contoh Format</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Import</button>
            </div>
           </form>
        </div>
    </div>
</div>
