<div class="modal fade" id="editfotoprofile" tabindex="-1" aria-labelledby="editfotoprofile" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-gray-200 shadow border-0 mb-0">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 text-center py-4">
                            <h4 class="font-weight-bolder text-white mt-1 mb-0">Personal Information</h4>
                            <p class="mb-1 text-sm text-white">Change Your Foto Profil </p>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="{{ route('own.foto', ['id' => $owner->id])  }}"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PUT')

                            <div class="input-group input-group-static mb-4">
                                <label for="foto_profile">Foto Profile Baru</label>
                                <input id="foto_profile" type="file" class="form-control" name="foto_profile">
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn bg-gradient-dark mt-4 mb-0">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
