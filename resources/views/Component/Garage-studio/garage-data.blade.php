<div class="modal fade bd-example-modal-lg" id="datamobil" tabindex="-1" aria-labelledby="datamobil" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-gray-200 shadow border-0 mb-0">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 text-center py-4">
                            <h4 class="font-weight-bolder text-white mt-1 mb-0">CAR GARAGE INFORMATION </h4>
                        </div>
                    </div>
                    <table class="table table-responsive-sm">
                        <thead>
                            <tr>
                                <th>Kode Mobil</th>
                                <th>Merk</th>
                                <th>Model</th>
                                <th>Plat</th>
                                <th>Tarif</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($cardata as $car)
                            <tr>
                                <td>{{ $car->kode_mobil }}</td>
                                <td>{{ $car->merk }}</td>
                                <td>{{ $car->model }}</td>
                                <td>{{ $car->plat }}</td>
                                <td>@currency($car->tarif)</td>
                                <td><span class="badge badge-sm badge-success">{{ $car->status }}</span></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
