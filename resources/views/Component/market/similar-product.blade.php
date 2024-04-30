
<section class="py-0 mb-9">
    <div class="container">
        <div class="d-flex flex-between-center mb-3">
            <div>
                <h3>Similar Products</h3>
                <p class="mb-0 text-body-tertiary fw-semibold">Essential for a better life</p>
            </div><button class="btn btn-sm btn-phoenix-primary">View all</button>
        </div>
        <div class="row g-3 mb-6">
            @foreach ($userxcar as $car )
            <div class="col-sm-6 col-lg-4 col-xl-3">
                <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden">
                    <img class="img my-10" width="350" height="250" src="../{{ $car->foto_mobil }}"
                        alt="" />

                    @if(Auth::user())

                    <div class="hover-actions top-0 end-0 mt-4 me-4 z-5">
                        <button class="btn btn-wish">
                            <span class="far fa-heart" style="color: red" data-fa-transform="down-1">
                            </span>
                        </button>
                    </div>
                    @endif
                    <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end"
                        style="opacity: 70%">
                        <a class="stretched-link fs-7 text-white fw-bold" href="#!">{{ $car->merk }} | {{
                            $car->model }}</a>
                        <p class="mb-2 text-secondary-lighter"><span
                                class="fa-solid fa-map-marker-alt me-2"></span>{{ $car->kota }}, Indonesia
                        </p>
                        <div class="d-flex align-items-center gap-3"><span
                                class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span
                                    class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span
                                    class="badge-label">4.8</span></span>
                            <h4 class="mb-0 text-white fw-bold text-nowrap">@currency($car->tarif) <span
                                    class="text-secondary-lighter fs-8 fw-normal">/
                                    24 hours</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
