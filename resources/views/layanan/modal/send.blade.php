<div class="modal fade" id="sendSurat{{ $k->id }}" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center p-5">
                <lord-icon
                    src="https://cdn.lordicon.com/tdrtiskw.json"
                    trigger="loop"
                    colors="primary:#f7b84b,secondary:#405189"
                    style="width:130px;height:130px">
                </lord-icon>
                <div class="mt-4 pt-4">
                    <h4>Yakin mengirimkan surat ke siswa?</h4>
                    <p class="text-muted"> Data yang dikirimkan tidak bisa ditarik kembali!!!</p>
                    <!-- Toogle to second dialog -->
                    <a href="{{ route('layanan.send', $k->id) }}" type="button"  class="btn btn-success">Kirim</a>
                </div>
            </div>
        </div>
    </div>
</div>
