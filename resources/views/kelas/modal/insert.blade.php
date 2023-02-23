<div class="modal fade" id="insertKelas">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kelas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('kelas.insert') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Tingkat Kelas</label>
                    <select class="default-select wide form-control" id="validationCustom05" name="tingkat">
                        <option  data-display="Select" value="">Pilih salah satu</option>
                        <option  data-display="Select" value="X">X</option>
                        <option  data-display="Select" value="XI">XI</option>
                        <option  data-display="Select" value="XII">XII</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Nama Kelas</label>
                    <input type="text" class="form-control input-rounded" name="nama" placeholder="Masukkan Nama Kelas">
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
