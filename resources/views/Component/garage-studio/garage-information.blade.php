

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <h5 class="mb-5"><b class="badge bg-dark">Garage Information</b>
                </h5>
            </div>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="row">
            @foreach($cardata as $car)
            <div class="col-lg-3 col-sm-6 me-5">
                <div class="card card-plain">
                    <div class="card-header p-0 position-relative">
                        <a class="d-block blur-shadow-image">
                            <img src="../{{ ($car->foto_mobil) }}" alt="img-blur-shadow"
                                class="img shadow border-radius-lg" width="350" height="250" loading="lazy">
                        </a>
                    </div>
                    <div class="card-body px-0">

                        @if($car->status == 'Available')

                        <span class="badge rounded-pill bg-success mb-2">{{ $car->status }}</span>

                        @elseif($car->status == 'On Duty')

                        <span class="badge rounded-pill bg-danger mb-2">{{ $car->status }}</span>

                        @else

                        <span class="badge rounded-pill bg-secondary mb-2">{{ $car->status }}</span>

                        @endif

                        <h5>
                            <a href="javascript:;" class="text-dark font-weight-bold">{{ $car->merk }} | {{
                                $car->model }}</a>
                        </h5>

                        <a href="{{ url('market/'.$car->kode_mobil) }}" class="text-info text-sm icon-move-right">Check Information
                            <i class="fas fa-arrow-right text-xs ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>

            @endforeach

            <div class="col-lg-3 col-md-12 col-12">
                <div
                    class="card card-blog card-background cursor-pointer bg-gradient-secondary shadow-secondary border-radius-lg">
                    <div class="card-body">
                        <div class="content-left text-start my-auto py-4">
                            <h2 class="card-title text-white">Car Data : </h2>
                            <p class="card-description text-white">Don't be afraid of having difficulty managing
                                data, we make it easy now.</p>
                            <a class="text-white text-sm icon-move-right" data-bs-toggle="modal"
                                data-bs-target="#datamobil">Check Car Data
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                            <br>
                            <a class="text-white text-sm icon-move-right" data-bs-toggle="modal"
                                data-bs-target="#tambahmobil">Add New Car
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                            <br>
                            <a class="text-white text-sm icon-move-right" data-bs-toggle="modal"
                                data-bs-target="#editdatamobil">Update Car
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                            <br>
                            <a class="text-white text-sm icon-move-right" data-bs-toggle="modal"
                                data-bs-target="#hapusdatamobil">Delete Car
                                <i class="fas fa-arrow-right text-xs ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
