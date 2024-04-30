<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>403 - ACCESS FORBIDDEN</title>

    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--                 Stylesheets                    -->
    <!-- ===============================================-->

    @include('Component.assets.css')

</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="px-3">
            <div class="row min-vh-100 flex-center p-5">
                <div class="col-12 col-xl-10 col-xxl-8">
                    <div class="row justify-content-center align-items-center g-5">
                        <div class="col-12 col-lg-6 text-center text-lg-center">
                            <img class="img-fluid mb-6 w-50 w-lg-75 d-dark-none"
                                src="{{asset ('assets/img/icons/403.png') }}" alt="" />
                            <img class="img-fluid mb-6 w-50 w-lg-75 d-light-none"
                                src="{{asset ('assets/img/icons/dark_403.png') }}" alt="" />
                            <h2 class="text-body-danger fw-bolder mb-3 text-danger">ACCESS FORBIDDEN !</h2>
                            <p class="text-body-danger mb-5 text-danger">HALT ! CHECK YOUR ACCOUNT STATUS.<br
                                    class="d-none d-sm-block" />YOUR ACCOUNT TYPE CAN'T ACCESS THIS PAGE.
                            </p>
                            <a class="btn btn-lg btn-danger mt-3" href="{{url('/logout')}}">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
