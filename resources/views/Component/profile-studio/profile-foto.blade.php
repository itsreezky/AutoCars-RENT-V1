<div class="modal fade" id="editfoto" tabindex="-1" aria-labelledby="editfoto" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editprofile">Edit Foto Profile</h5>
            </div>
            <form method="POST" action="{{ route('profile.foto', ['id' => $user->id])  }}"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label" for="foto_profile">Upload Foto Profile</label>
                        <input class="form-control" id="foto_profile" name="foto_profile" type="file" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" type="submit">Edit</button>
                    <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
