<div class="modal fade" id="changeAvatar">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ganti Avatar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal">
                </button>
            </div>
           <form action="{{ route('profile.change_avatar') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <div class="mb-3">
                    <label for="">Avatar</label>
                    <input type="file" class="form-control input-rounded" name="avatar">
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
