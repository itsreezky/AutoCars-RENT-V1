<div class="modal fade" id="editprofile" tabindex="-1" aria-labelledby="editprofile" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editprofile">Edit Personal Info</h5>
            </div>
            <form method="POST" action="{{ route('profile.update', ['id' => $user->id])  }}"
                enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('PATCH')
                    <div>
                        <div class="form-control form-control">
                            <label>Nama</label>
                            <input id="nama" type="text" class="form-control" value="{{ $user->nama }}" name="nama">
                        </div>
                        <div class="form-control form-control">
                            <label>Email</label>
                            <input id="email" type="email" class="form-control" value="{{ $user->email }}" name="email">
                        </div>
                        <div class="form-control form-control">
                            <label>No.HP</label>
                            <input id="hp" type="number" class="form-control" value="{{ $user->hp }}" name="hp">
                        </div>
                        <div class="form-control form-control">
                            <label>Alamat</label>
                            <input id="alamat" type="text" class="form-control" value="{{ $user->alamat }}"
                                name="alamat">
                        </div>
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

