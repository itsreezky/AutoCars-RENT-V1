<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Market - AutoCars</title>

    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--                 Stylesheets                    -->
    <!-- ===============================================-->

    @include('Component.assets.css')

</head>

 <!-- ===============================================-->
    <!--                 SweetAlert                    -->
    <!-- ===============================================-->

    @include('sweetalert::alert')

<body>

    <!-- ===============================================-->
    <!--                   Main Content                 -->
    <!-- ===============================================-->

    <main class="main" id="top">

        <!-- ===============================================-->
        <!--               Section Topbar                   -->
        <!-- ===============================================-->

        @include('Component.topbar')

        <!-- ===============================================-->
        <!--                 Section Menu                   -->
        <!-- ===============================================-->

        <div class="ecommerce-homepage pt-2 mb-9">

            @include('Component.menu')

            <!-- ===============================================-->
            <!--               Section Banner                   -->
            <!-- ===============================================-->

            <section class="py-0 px-xl-3">
                <div class="container px-xl-0 px-xxl-3">
                    <div class="row g-3 mb-9">
                        <div class="col-12">
                            <div class="whooping-banner w-100 rounded-3 overflow-hidden">
                                <div class="bg-holder z-n1 product-bg" style="background-image:url(../../../assets/img/automotive/amg-gt.png);background-position: bottom right;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="bg-holder z-n1 shape-bg" style="background-image:url(../../../assets/img/e-commerce/whooping_banner_shape_2.png);background-position: bottom left;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="banner-text" data-bs-theme="light">
                                    <h2 class="text-warning-light fw-bolder fs-lg-3 fs-xxl-2">Whooping <span class="gradient-text">30% </span>Off</h2>
                                    <h3 class="fw-bolder fs-lg-5 fs-xxl-3 text-white">on saturday cars</h3>
                                </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="/login">Book
                                    Now</a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="gift-items-banner w-100 rounded-3 overflow-hidden">
                                <div class="bg-holder z-n1 banner-bg" style="background-image:url(https://images.unsplash.com/photo-1558958806-d5088c90f389?q=80&w=2013&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
                                </div>
                                <!--/.bg-holder-->
                                <center>
                                    <div class="banner-text text-md-center me-3 mt-3 mb-2">
                                        <h2 class="text-white fw-bolder fs-xl-4">Get <span class="gradient-text">10% Off
                                            </span><br class="d-md-none"> on first rent</h2><a class="btn btn-lg btn-primary rounded-pill banner-button" href="/login" s>Book
                                            Now</a>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-3 overflow-hidden">
                                <div class="bg-holder z-n1 banner-bg" style="background-image:url(../../../assets/img/automotive/bg-market.jpg);">
                                </div>
                                <!--/.bg-holder-->
                                <div class="row align-items-center w-sm-100">

                                    <div class="col-12">
                                        <center>
                                            <div class="banner-text ms-6">
                                                <h2 class="text-white fw-bolder fs-sm-4 mb-5"> Become Verified Member <br><span class="fs-7 fs-sm-6"> Join and Register FREE</span></h2><a class="btn btn-lg btn-warning rounded-pill banner-button" href="/profile">Check
                                                    Now</a>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-4 mt-10">
                            <div class="col-12 col-lg-12 col-xxl-12">
                                <div class="d-flex flex-between-center mb-3">
                                    <div class="d-flex"><span class="fas fa-bolt text-warning fs-6"></span>
                                        <h3 class="mx-3">Cars Available</h3><span class="fas fa-bolt text-warning fs-6"></span>
                                    </div><a class="btn btn-link btn-lg p-0 d-none d-md-block" href="#!">Explore
                                        more<span class="fas fa-chevron-right fs-9 ms-1"></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="container-sm-md px-0 px-md-3">
                            <div class="position-relative">
                                <div class="row gx-0 gy-3 gy-md-0 align-items-center mx-auto p-3 bg-body-emphasis rounded-5 rounded-md-pill position-relative border w-lg-75">
                                    <div class="col-12 col-md">
                                        <div class="form-icon-container border-bottom border-bottom-md-0 border-translucent pb-3 pb-md-0">
                                            <input class="form-control form-icon-input border-0 py-0 shadow-none fs-8" type="text" placeholder="Pick a place" /><span class="fa-solid fa-map-marker-alt form-icon text-body-tertiary top-0" data-fa-transform="down-2"></span>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md">
                                        <div class="form-icon-container flatpickr-input-container"><input class="form-control datetimepicker form-icon-input border-y-0 border-start-0 border-start-md py-0 shadow-none border-translucent fs-8 rounded-0" type="text" placeholder="Pick a date" data-options='{"mode":"range","dateFormat":"d/m/y","disableMobile":true}' /><span class="fa-solid fa-calendar form-icon top-0 text-body-tertiary" data-fa-transform="down-2"></span></div>
                                    </div>
                                    <div class="col-6 col-md"><button class="btn px-3 fs-8 fw-semibold text-body-tertiary" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-auto-close="outside"><span class="fa-solid fa-user me-2"></span>1
                                            adult</button>
                                        <div class="dropdown-menu dropdown-menu-start p-4" style="max-width: 320px">
                                            <div class="row align-items-center g-0 pb-3 border-bottom border-translucent">
                                                <div class="col-5">
                                                    <h5 class="mb-0 text-body">Adults</h5>
                                                </div>
                                                <div class="col-7">
                                                    <div class="input-group gap-2" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span class="fa-solid fa-minus px-1"></span></button><input class="form-control border-translucent input-spin-none text-center rounded" id="adults" type="number" value="2" /><button class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span class="fa-solid fa-plus px-1"></span></button></div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center g-0 py-3 border-bottom border-translucent">
                                                <div class="col-5">
                                                    <h5 class="mb-0 text-body">Infants</h5>
                                                </div>
                                                <div class="col-7">
                                                    <div class="input-group gap-2" data-quantity="data-quantity">
                                                        <button class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span class="fa-solid fa-minus px-1"></span></button><input class="form-control border-translucent input-spin-none text-center rounded" id="infants" type="number" value="2" /><button class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span class="fa-solid fa-plus px-1"></span></button></div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center g-0 pt-3">
                                                <div class="col-5">
                                                    <h5 class="mb-0 text-body">Children</h5>
                                                </div>
                                                <div class="col-7">
                                                    <div class="input-group gap-2" data-quantity="data-quantity">
                                                        <button class="btn btn-phoenix-primary px-2 rounded" data-type="minus"><span class="fa-solid fa-minus px-1"></span></button><input class="form-control border-translucent input-spin-none text-center rounded" id="children" type="number" value="2" /><button class="btn btn-phoenix-primary px-2 rounded" data-type="plus"><span class="fa-solid fa-plus px-1"></span></button></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-auto"><button class="btn btn-lg btn-phoenix-primary rounded-pill w-100"><span class="fa-solid fa-search me-2"></span>Search</button></div>
                                </div>
                            </div>


                            <!-- ============================================-->
                            <!-- <section> begin ============================-->
                            <section class="py-0">
                                <div class="container-medium">
                                    <div class="py-6">
                                        <div class="d-flex"><select class="form-select w-sm-auto me-4" id="hotelSort" name="Hotel sort">
                                                <option>Sort by</option>
                                                <option>Best reviewed and lowest price</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                            </select><button class="btn btn-phoenix-secondary text-nowrap px-3 px-md-4 ms-auto me-2"><span class="fa-solid fa-map me-md-2"></span><span class="d-none d-md-inline-block">Show in map</span></button><button class="btn btn-phoenix-secondary text-nowrap px-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#hotelFilterOffcanvas" aria-controls="hotelFilterOffcanvas"><span class="fa-solid fa-filter me-md-2"></span><span class="d-none d-md-inline-block">Filters</span></button></div>
                                    </div>


                                    <div class="row g-3 mb-6">
                                        @foreach ($userxcar as $car )
                                        <div class="col-sm-6 col-lg-4 col-xl-3">
                                            <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden">
                                                <img class="img my-10" width="350" height="250" src="../{{ $car->foto_mobil }}" alt="" />
                                                <div class="hover-actions top-0 end-0 mt-4 me-4 z-5">
                                                    <button class="btn btn-wish">
                                                        <span class="far fa-heart" style="color: red" data-fa-transform="down-1">
                                                            </span>
                                                        </button>
                                                    </div>
                                                <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end" style="opacity: 70%">

                                                    <a class="stretched-link fs-7 text-white fw-bold" href="{{ url('market/'.$car->kode_mobil) }}">{{ $car->merk }} | {{ $car->model }}</a>
                                                    <p class="mb-2 text-secondary-lighter"><span class="fa-solid fa-map-marker-alt me-2"></span>{{ $car->kota }}, Indonesia</p>
                                                    <div class="d-flex align-items-center gap-3"><span class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span class="badge-label">4.8</span></span>
                                                        <h4 class="mb-0 text-white fw-bold text-nowrap">@currency($car->tarif) <span class="text-secondary-lighter fs-8 fw-normal">/
                                                                24 hours</span></h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </section>



            @if (Auth::user())
            <!-- ===============================================-->
            <!--                 Support Chat                   -->
            <!-- ===============================================-->

            @include('Component.support')
            @endif


        </div>

        <!-- ===============================================-->
        <!--                 About                         -->
        <!-- ===============================================-->

        @include('Component.about')


        <!-- ===============================================-->
        <!--                 Footer                         -->
        <!-- ===============================================-->

        @include('Component.footer')

    </main>

    <!-- ===============================================-->
    <!--               Customize WebApps                -->
    <!-- ===============================================-->


    @include('Component.customize')


    <!-- ===============================================-->
    <!--                   JavaScripts                  -->
    <!-- ===============================================-->

    @include('Component.assets.js')

</body>

</html>
