<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Garage - AutoCars</title>

    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--                 Stylesheets                    -->
    <!-- ===============================================-->

        @include('Component.assets.css-garage')

</head>

<body class="smart-home bg-light-200">


<!-- ===============================================-->
    <!--                 SweetAlert                    -->
    <!-- ===============================================-->

    @include('sweetalert::alert')


    <!-- ===============================================-->
    <!--                 Garage Navbar                  -->
    <!-- ===============================================-->

        @include('Component.Garage-studio.garage-navbar')


    <!-- ===============================================-->
    <!--                 Garage Modal                   -->
    <!-- ===============================================-->

        @include('Component.Garage-studio.garage-edit')

        @include('Component.Garage-studio.garage-tambah')

        @include('Component.Garage-studio.garage-data')

        @include('Component.Garage-studio.garage-delete')



    <header class="bg-gradient-dark">
        <div class="page-header min-vh-50"
            style="background-image: url('https://images.unsplash.com/photo-1568605117036-5fe5e7bab0b7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container">


                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <h1 class="text-white">Welcome To Garage Studio</h1>
                        <p class="lead mb-4 text-white opacity-8">Work Easy With Automotive Rent Apps, We’re constantly
                            trying to express ourselves and
                            actualize our dreams.</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <section class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <h5 class="mb-5"><b class="badge bg-dark">Garage Information</b>
                        </h5>
                    </div>
                </div>
                <div class="row">
                    @foreach($cardata as $car)

                    <div class="col-lg-3 col-sm-6 me-5">
                        <div class="card card-plain">
                            <div class="card-header p-0 position-relative">
                                <a class="d-block blur-shadow-image">
                                    <img src="{{ ($car->foto_mobil) }}" alt="img-blur-shadow"
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

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mx-auto">
                        <center>
                            <h5>
                                <span class="badge bg-dark">CAR CONTROLLER</span>
                            </h5>
                        </center>
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill bg-dark p-1" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active" data-bs-toggle="tab" href="#cam1"
                                        role="tab" aria-controls="cam1" aria-selected="true">
                                        <span class="badge bg-light text-dark">AMG-GT</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam2" role="tab"
                                        aria-controls="cam2" aria-selected="false">
                                        <span class="badge bg-light text-dark">SUPRA</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1" data-bs-toggle="tab" href="#cam3" role="tab"
                                        aria-controls="cam3" aria-selected="false">
                                        <span class="badge bg-light text-dark">G-AMG</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

        <section>

            <!-- ===============================================-->
            <!--                 Garage Cam                     -->
            <!-- ===============================================-->
                    @include('Component.Garage-studio.garage-cam')


        </section>

            <!-- ===============================================-->
            <!--                    Footer                      -->
            <!-- ===============================================-->

                    @include('Component.Garage-studio.garage-footer')


    <!-- ===============================================-->
    <!--                   JavaScripts                  -->
    <!-- ===============================================-->

    @include('Component.assets.js-garage')

</body>

</html>
