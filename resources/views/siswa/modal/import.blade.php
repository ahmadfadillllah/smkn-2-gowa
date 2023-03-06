<div class="modal fade" id="importSiswa">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Import Siswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('siswa.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Import File Excel</label>
                    <input type="file" class="form-control input-rounded" name="file" required>
                </div>
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col" style="color:blueviolet">Kelas ID</th>
                        <th scope="col" style="color:blueviolet">Nama Kelas</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($kelas as $k)
                      <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->tingkat }} {{ $k->nama }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                <a href="{{ asset('siswa.xlsx') }}" style="color:aqua">Unduh Contoh Format</a>
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
