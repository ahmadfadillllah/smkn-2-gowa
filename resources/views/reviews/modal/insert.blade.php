<div class="modal fade" id="insertReviews">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Review</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('reviews.insert') }}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Pesan</label>
                    <input type="text" class="form-control input-rounded" name="pesan" placeholder="Masukkan Pesan">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger light"
                    data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           </form>
        </div>
    </div>
</div>
