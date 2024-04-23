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
                                <div class="bg-holder z-n1 product-bg"
                                    style="background-image:url(../../../assets/img/automotive/amg-gt.png);background-position: bottom right;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="bg-holder z-n1 shape-bg"
                                    style="background-image:url(../../../assets/img/e-commerce/whooping_banner_shape_2.png);background-position: bottom left;">
                                </div>
                                <!--/.bg-holder-->
                                <div class="banner-text" data-bs-theme="light">
                                    <h2 class="text-warning-light fw-bolder fs-lg-3 fs-xxl-2">Whooping <span
                                            class="gradient-text">30% </span>Off</h2>
                                    <h3 class="fw-bolder fs-lg-5 fs-xxl-3 text-white">on saturday cars</h3>
                                </div><a class="btn btn-lg btn-primary rounded-pill banner-button" href="/login">Book
                                    Now</a>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="gift-items-banner w-100 rounded-3 overflow-hidden">
                                <div class="bg-holder z-n1 banner-bg"
                                    style="background-image:url(https://images.unsplash.com/photo-1558958806-d5088c90f389?q=80&w=2013&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D);">
                                </div>
                                <!--/.bg-holder-->
                                <center>
                                    <div class="banner-text text-md-center me-3 mt-3 mb-2">
                                        <h2 class="text-white fw-bolder fs-xl-4">Get <span class="gradient-text">10% Off
                                            </span><br class="d-md-none"> on first rent</h2><a
                                            class="btn btn-lg btn-primary rounded-pill banner-button" href="/login" s>Book
                                            Now</a>
                                    </div>
                                </center>
                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div
                                class="best-in-market-banner d-flex h-100 px-4 px-sm-7 py-5 px-md-11 rounded-3 overflow-hidden">
                                <div class="bg-holder z-n1 banner-bg"
                                    style="background-image:url(../../../assets/img/automotive/bg-market.jpg);">
                                </div>
                                <!--/.bg-holder-->
                                <div class="row align-items-center w-sm-100">

                                    <div class="col-12">
                                        <center>
                                            <div class="banner-text ms-10">
                                                <h2 class="text-white fw-bolder fs-sm-4 mb-5">Become partner<br><span
                                                        class="fs-7 fs-sm-6"> Join and Register FREE</span></h2><a
                                                    class="btn btn-lg btn-warning rounded-pill banner-button"
                                                    href="/register">Check
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
                                        <h3 class="mx-3">Cars Available</h3><span
                                            class="fas fa-bolt text-warning fs-6"></span>
                                    </div><a class="btn btn-link btn-lg p-0 d-none d-md-block" href="#!">Explore
                                        more<span class="fas fa-chevron-right fs-9 ms-1"></span></a>
                                </div>
                            </div>
                        </div>

                        @foreach ($cardata as $car)


                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="card text-dark bg-light">
                                <img class="card-img-top" src="{{ $car->foto_mobil }}" alt="cars" />
                              <div class="card-body">
                                <h4 class="card-title text-dark"> {{ $car->merk }} | {{ $car->model }} </h4>
                                <p class="card-text"><b>Description</b> <br>{{ $car->keterangan }}</p>
                                <p class="card-text"><b>Specification</b> <br>{{ $car->spesifikasi }}</p>
                                <center>
                                <button class="btn btn-outline-primary me-1 mb-1">Rent Now</button>
                                </center>
                                </div>
                            </div>
                          </div>

                        @endforeach



                    </div>
                </div>
            </section>


            @if(Auth::user())
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
