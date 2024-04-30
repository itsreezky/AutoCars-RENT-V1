<section>
    <div class="container-large ms-10 me-10 mt-5">
        <div class="text-center mb-5">
            <h3 class="mb-2 text-body-emphasis">
                <span class="fas fa-bolt text-warning fs-6"></span>
                Available Cars
                <span class="fas fa-bolt text-warning fs-6"></span>
            </h3>
            <p class="mb-0 text-body-tertiary">we make it easy for you to choose a car to rent.</p>
        </div>
        <div class="row gx-3 gy-6 mb-8">

            @foreach ($userxcar as $car)

            <div class="col-12 col-sm-6 col-md-4 col-xxl-2 mx-auto">
                <div class="product-card-container h-100">
                    <div class="position-relative text-decoration-none product-card h-100">
                        <div class="d-flex flex-column justify-content-between h-100">
                            <div>
                                <div class="border border-1 border-translucent rounded-3 position-relative mb-3">

                                    @if(Auth::user())

                                    <form action="{{route('addWishlist')}}" method="POST">

                                        @csrf

                                        {{-- INPUT DATA TO WISHLIST --}}
                                        <input type="hidden" name="uuid" id="uuid" value="{{ Auth::user()->uuid }}">
                                        <input type="hidden" name="foto_mobil" id="foto_mobil"
                                            value="{{ $car->foto_mobil }}">
                                        <input type="hidden" name="kode_mobil" id="kode_mobil"
                                            value="{{ $car->kode_mobil }}">
                                        <input type="hidden" name="owner" id="owner" value="{{ $car->nama }}">
                                        <input type="hidden" name="merk" id="merk" value="{{ $car->merk }}">
                                        <input type="hidden" name="model" id="model" value="{{ $car->model }}">
                                        <input type="hidden" name="tarif" id="tarif" value="{{ $car->tarif }}">

                                        <button type="submit" name="submit"
                                            class="btn btn-wish btn-wish-primary z-2 d-toggle-container">
                                            <span class="fas fa-heart d-block-hover"></span>
                                            <span class="far fa-heart d-none-hover"></span>
                                        </button>
                                        {{-- ///////////////////////// --}}

                                    </form>

                                    @else

                                    <a href="/login">
                                        <button class="btn btn-wish btn-wish-primary z-2 d-toggle-container"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            title="Add to wishlist"><span
                                                class="fas fa-heart d-block-hover"></span><span
                                                class="far fa-heart d-none-hover"></span></button></a>

                                    @endif

                                    <span class="badge bg-success ms-2 mt-2">{{ $car->status }}</span>
                                    <img class="img" width="300" height="200" src="{{url($car->foto_mobil) }}" alt="" />
                                </div>

                                <a href="/market/{{ $car->kode_mobil }}">
                                    <h6 class="mb-2 lh-sm line-clamp-3 product-name">{{ $car->merk }} | {{ $car->model
                                        }}</h6>
                                </a>
                                <p class="fs-9"><span class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="fa fa-star text-warning"></span><span
                                        class="text-body-quaternary fw-semibold ms-1">(Recommended)</span>
                                </p>
                            </div>
                            <div>
                                <h6><span class="me-1 mb-2" data-feather="map-pin"></span>Kota {{ $car->kota }}</h6>

                                <div class="d-flex align-items-center mb-1">
                                    <span class="text-body-emphasis mb-0">@currency($car->tarif) / 24 hours</span>
                                </div>
                            </div>
                            <a href="/market/{{ $car->kode_mobil }}">
                                <center>
                            <button class="btn btn-info mt-2">Check Information</button>
                        </center>
                           </a>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
