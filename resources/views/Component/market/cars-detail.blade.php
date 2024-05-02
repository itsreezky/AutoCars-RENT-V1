<div class="pt-5 pb-9">

    <section class="py-0">
        <div class="container-small">
            <nav class="mb-3" aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                  <li class="breadcrumb-item"><a href="{{route('market')}}">Market</a></li>
                  <li class="breadcrumb-item">Cars Detail</li>
                </ol>
            </nav>

            <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
                <div class="col-12 col-lg-6">
                    <div class="row g-3 mb-3">
                        <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                            <div class="swiper-products-thumb swiper swiper theme-slider overflow-visible" id="swiper-products-thumb">
                            </div>
                        </div>
                        <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                            <div class="d-flex align-items-center border border-translucent rounded-3 text-center p-5 h-100">
                                <img class="img-fluid" src="../{{ $cars->foto_mobil }}" alt="">
                            </div>
                        </div>
                    </div>


                    <div class="d-flex">
                        @if(Auth::user())

                        <form action="{{route('addWishlist')}}" method="POST">

                            @csrf

                                {{-- INPUT DATA TO WISHLIST --}}
                                <input type="hidden" name="uuid" id="uuid" value="{{ Auth::user()->uuid }}">
                                <input type="hidden" name="foto_mobil" id="foto_mobil"
                                    value="{{ $cars->foto_mobil }}">
                                <input type="hidden" name="kode_mobil" id="kode_mobil"
                                    value="{{ $cars->kode_mobil }}">
                                <input type="hidden" name="owner" id="owner" value="{{ $own->nama }}">
                                <input type="hidden" name="merk" id="merk" value="{{ $cars->merk }}">
                                <input type="hidden" name="model" id="model" value="{{ $cars->model }}">
                                <input type="hidden" name="tarif" id="tarif" value="{{ $cars->tarif }}">

                                {{-- ///////////////////////// --}}


                            <button type="submit" name="submit" class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs-9 fs-sm-8">
                        <span class="me-2 far fa-heart"></span>Add to wishlist </a></button>
                    </form>


                        <button class="btn btn-lg btn-warning rounded-pill w-100 fs-9 fs-sm-8">
                        <span class="fa-solid fa-car-on me-2"></span>RENT, NOW !</button>
                        @endif
                    </div>
                </div>



                <div class="col-12 col-lg-6">
                    <div class="d-flex flex-column justify-content-between h-100">

                            <div class="d-flex flex-wrap">
                                <div class="me-2"><span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                    <span class="fa fa-star text-warning"></span>
                                </div>
                                <p class="text-primary fw-semibold mb-2">HIGH CLASS</p>
                            </div>

                            <h3 class="mb-3 lh-sm">{{ $cars->merk }} | {{ $cars->model }}</h3>

                            <div class="d-flex flex-wrap align-items-start mb-3">#{{ $cars->kode_mobil }} -
                                <span class="badge text-bg-success fs-9 rounded-pill ms-2 fw-semibold"> {{ $cars->status }}</span>
                            </div>

                            <div class="d-flex flex-wrap align-items-center">
                                <h1 class="me-3">@currency($cars->tarif) / <small>24 hours</small></h1>
                                <p class="text-warning fw-bolder fs-7 mb-0"><span
                                        class="badge text-bg-warning">10% off</span></p>
                            </div>
                            <h5 class="mt-7 mb-4">Keterangan :</h5>
                            <p class="mb-2 text-body-secondary"><strong class="text-body-highlight">{{
                                    $cars->keterangan }}</p>

                        <div>
                            <div class="row g-3 g-sm-5 align-items-end">
                                <div class="col-12 col-sm-auto me-3">
                                    <p class="fw-semibold mb-2 text-body ms-2">Transmisi :</p>
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-outline-primary rounded-pill me-1 mb-1"
                                            type="button">{{ $cars->transmisi }}</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto me-3">
                                    <p class="fw-semibold mb-2 text-body">Jumlah Seat :</p>
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-outline-primary rounded-pill me-1 mb-1 ms-4"
                                            type="button">{{ $cars->seat }}</button>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto me-3">
                                    <p class="fw-semibold mb-2 text-body">Bahan Bakar :</p>
                                    <div class="d-flex align-items-center">
                                        <button class="btn btn-outline-primary rounded-pill me-1 mb-1 ms-1"
                                            type="button">{{ $cars->bahan_bakar }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-0">
        <div class="container-small">
            <ul class="nav nav-underline fs-9 mb-4" id="productTab" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="specification-tab" data-bs-toggle="tab"
                        href="#tab-specification" role="tab" aria-controls="tab-specification"
                        aria-selected="false">Information</a></li>
            </ul>
            <div class="row gx-3 gy-7">
                <div class="col-12 col-lg-7 col-xl-8">
                    <div class="tab-content" id="productTabContent">
                        <div class="tab-pane pe-lg-6 pe-xl-12 fade show active" id="tab-specification"
                            role="tabpanel" aria-labelledby="specification-tab">
                            <h3 class="mb-0 ms-4 fw-bold">{{ $cars->merk }} | {{ $cars->model }} DETAIL</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%"> </th>
                                        <th style="width: 60%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6
                                                class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                Cars ID</h6>
                                        </td>
                                        <td class="px-5 mb-0">#{{ $cars->kode_mobil }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6
                                                class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                Merk</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{ $cars->merk }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6
                                                class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                Model</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{ $cars->model }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6
                                                class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                Plat</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{ $cars->plat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h3 class="mb-0 mt-6 mb-2 ms-4 fw-bold">+ + + + + + + + + + + + + + +</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th style="width: 40%"> </th>
                                        <th style="width: 60%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6
                                                class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                Transmisi</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{ $cars->transmisi }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6
                                                class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                Jumlah Seat</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{ $cars->seat }}</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-body-highlight align-middle">
                                            <h6
                                                class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">
                                                Bahan Bakar</h6>
                                        </td>
                                        <td class="px-5 mb-0">{{ $cars->bahan_bakar }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 col-xl-4">
                    <h4>Owner Information</h4>
                    <div class="card">
                        <div class="card-body d-flex flex-column justify-content-between pb-3">
                            <div class="row align-items-center g-5 mb-3 text-center text-sm-start">
                                <div class="col-12 col-sm-auto mb-sm-2">
                                    <div class="avatar avatar-4xl">
                                        <img class="rounded-circle" src="../{{ $own->foto_profile }}"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="col-12 col-sm-auto flex-1">
                                    <h4>{{ $own->nama }}</h4>
                                    <span class="badge badge-phoenix fs-10 badge-phoenix-success">
                                        <span class="badge-label">{{ $own->status }}</span>
                                        <span class="ms-1" data-feather="check"
                                            style="height:12.8px;width:12.8px;"></span>
                                    </span>
                                    <p class="text-body-secondary"></p>
                                    <div>
                                       <small>Registered Since {{ $own->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex flex-between-center border-top border-dashed pt-4">
                                <div>
                                    <h6>Location</h6>
                                    <p class="fs-8 text-body-secondary mb-0">{{ $own->kota }}, Indonesia</p>
                                </div>
                                <div>
                                    <h6>Chat Owner</h6>
                                    <p class="fs-8 text-body-secondary mb-0"><span
                                            class="badge badge-phoenix fs-10 badge-phoenix-danger">

                                            <span class="badge-label">comingsoon</span>

                                        </span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
