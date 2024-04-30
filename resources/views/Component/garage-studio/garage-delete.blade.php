<div class="modal fade bd-example-modal-lg" id="hapusdatamobil" tabindex="-1" aria-labelledby="hapusdatamobil"
    aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-gray-200 shadow border-0 mb-0">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 text-center py-4">
                            <h4 class="font-weight-bolder text-white mt-1 mb-0">DELETE CAR GARAGE INFORMATION </h4>
                        </div>
                    </div>
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Merk</th>
                                <th>Model</th>
                                <th>Plat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cardata as $car)
                            <tr>
                                <td>{{ $car->merk }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->plat }}</td>
                                <td>

                                   <a data-bs-toggle="modal" data-bs-target="#hapusdatamobilaction{{ $car->id }}">
                                    <button type="button" class="btn bg-gradient-danger btn-sm ms-2">Delete</button></a>

                                </td>
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
<div class="modal fade" id="hapusdatamobilaction{{ $car->id }}" tabindex="-1" aria-labelledby="hapusdatamobilaction" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h4 class="text-center">Apakah anda yakin menghapus mobil ini? :</h4>
                <center><span>{{ $car->merk }} | {{ $car->model }}</span><br>
                <span>Kode Mobil : {{ $car->kode_mobil }}</span></center>
            </div>
            <div class="modal-footer">
                    <form action="/garage/{{ $car->id }}" method="post">
                        @csrf
                        @method('delete')
                    <button type="submit" class="btn btn-primary">Hapus</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak Jadi</button>
            </div>
        </div>
    </div>
</div>

@endforeach

