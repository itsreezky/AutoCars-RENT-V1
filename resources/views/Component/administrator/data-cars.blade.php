<div class="row g-3 mt-3">
    <center>
        <div class="col-xxl-2 col-xl-4">
            <div class="alert alert-outline-info align-items-center" role="alert">
                <span class="fas fa-info-circle text-info fs-5 me-2 ms-2"></span>
                <p class="mb-0 flex-1">Data Tampil Disini</p>
            </div>
        </div>
        <a href="{{route('administrator.home') }}">
            <button class="btn btn-falcon-default btn-sm mt-2 mb-2">
                <span class="fa-solid fa-eye"></span>
                <span class="d-md-inline-block ms-1">Sembunyikan Data</span></button></a>

    </center>
    <div class="col-xxl-12 col-xl-12">

        <div class="card">
            <div class="card-body">

                <!-- MUNCUL DISINI -->
                <div class="col-12 col-xxl-12">
                    <center>
                        <span class="badge badge-phoenix fs-7 badge-phoenix-primary mb-3">
                            <span class="ms-1 mb-1" data-feather="info" style="height:20px;width:20px;"></span>
                            <span class="badge-label">Data Cars Autocars</span>
                        </span>
                    </center>
                    <div id="cars"
                        data-list='{"valueNames":["id","owner_id","kode_mobil","merk","model","plat","transmisi","seat","bahan_Bakar","tarif","status"],"page":5,"pagination":true}'>
                        <div class="search-box mb-3 mx-auto">
                            <form class="position-relative"><input
                                    class="form-control search-input search form-control-sm" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped table-sm fs-9 mb-0">
                                <thead>
                                    <tr>
                                        <th class="sort border-top border-translucent ps-3" data-sort="id">ID</th>
                                        <th class="sort border-top" data-sort="owner_id">OWNER ID</th>
                                        <th class="sort border-top" data-sort="kode_mobil">CARS ID</th>
                                        <th class="sort border-top" data-sort="merk">Merk</th>
                                        <th class="sort border-top" data-sort="model">Model</th>
                                        <th class="sort border-top" data-sort="plat">Plat</th>
                                        <th class="sort border-top" data-sort="transmisi">Transmisi</th>
                                        <th class="sort border-top" data-sort="seat">Seat</th>
                                        <th class="sort border-top" data-sort="bahan_bakar">Bahan Bakar</th>
                                        <th class="sort border-top" data-sort="tarif">Tarif</th>
                                        <th class="sort border-top" data-sort="status">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="list">
                                    @foreach ($allcars as $cars)
                                    <tr>
                                        <td class="align-middle ps-3 id">{{ $cars->id }}</td>
                                        <td class="align-middle owner_id">{{ $cars->owner_id }}</td>
                                        <td class="align-middle kode_mobil">{{ $cars->kode_mobil }}</td>
                                        <td class="align-middle merk">{{ $cars->merk }}</td>
                                        <td class="align-middle model">{{ $cars->model }}</td>
                                        <td class="align-middle plat">{{ $cars->plat }}</td>
                                        <td class="align-middle transmisi">{{ $cars->transmisi }}</td>
                                        <td class="align-middle seat">{{ $cars->seat }}</td>
                                        <td class="align-middle bahan_bakar">{{ $cars->bahan_bakar }}</td>
                                        <td class="align-middle tarif">@currency($cars->tarif)</td>
                                        <td class="align-middle status">{{ $cars->status }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>



                        <div class="d-flex justify-content-between mt-3"><span class="d-none d-sm-inline-block"
                                data-list-info="data-list-info"></span>
                            <div class="d-flex"><button class="page-link" data-list-pagination="prev"><span
                                        class="fas fa-chevron-left"></span></button>
                                <ul class="mb-0 pagination"></ul><button class="page-link pe-0"
                                    data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MUNCUL DISINI -->

            </div>
        </div>
    </div>
</div>
</div>
