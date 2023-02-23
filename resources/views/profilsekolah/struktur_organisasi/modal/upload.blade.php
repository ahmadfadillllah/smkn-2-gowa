<div class="modal fade" id="uploadOrganisasi">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ganti / Upload</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('profilsekolah.struktur_organisasi_upload') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Masukkan Gambar</label>
                    <input class="form-control" type="file" name="struktur_organisasi" id="formFile">
                    <p>Harap mengupload gambar dengan resolusi tinggi</p>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
           </form>
        </div>
    </div>
</div>
