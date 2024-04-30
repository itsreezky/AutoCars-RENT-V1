<div class="modal fade bd-example-modal-lg" id="editdatamobil" tabindex="-1" aria-labelledby="editdatamobil"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-gray-200 shadow border-0 mb-0">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 text-center py-4">
                            <h4 class="font-weight-bolder text-white mt-1 mb-0">EDIT CAR GARAGE INFORMATION </h4>
                        </div>
                    </div>
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Model</th>
                                <th>Plat</th>
                                <th>tarif</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cardata as $car)
                            <tr>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->plat }}</td>
                                <td>@currency($car->tarif)</td>
                                <td>
                                    <a data-bs-toggle="modal" data-bs-target="#editdatamobilaction{{ $car->id }}">
                                        <button type="button" class="btn bg-gradient-dark btn-sm ms-2">Edit</button>
                                </td>
                                </a>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($cardata as $car)
<div class="modal fade" id="editdatamobilaction{{ $car->id }}" tabindex="-1" aria-labelledby="editdatamobilaction" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-gray-200 shadow border-0 mb-0">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 text-center py-4">
                            <h4 class="font-weight-bolder text-white mt-1 mb-0">Edit Car Information</h4>
                            <p class="mb-1 text-sm text-white">Please Edit Your Car Data Carefully</p>
                        </div>
                    </div>
                    <div class="card-body">

                        <form method="POST" action="/garage/{{ $car->id }}"
                            enctype="multipart/form-data">

                            @csrf
                            @method('PATCH')
                            <div class="input-group input-group-static mb-4">
                                <label>Tarif</label>
                                <input id="tarif" type="number" class="form-control" value="{{ old('tarif', $car->tarif) }}"
                                    name="tarif">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label>Keterangan</label>
                                <input id="keterangan" type="text" class="form-control" value="{{ old('keterangan', $car->keterangan) }}"
                                    name="keterangan">
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

@endforeach
