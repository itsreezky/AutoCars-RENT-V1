<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Sign Out - AutoCars</title>

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
        <div class="container">
            <div class="row flex-center min-vh-100 py-5">
                <div class="col-sm-10 col-md-8 col-lg-5 col-xl-6 col-xxl-4">
                    <div class="text-center mb-4 mx-auto"><img class="mb-2 d-dark-none"
                            src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}" alt="reezky" />
                        <div class="mb-6">
                            <h4 class="text-body-highlight">Come back soon!</h4>
                            <p class="text-body-tertiary">Thanks for using AutoCars - RENT. <br class="d-lg-none" />You
                                are now successfully signed out.</p>
                        </div>
                        <div class="d-grid"><a class="btn btn-primary" href="/market"><span
                                    class="fas fa-angle-left me-2"></span>Go to dashboard</a></div>
                    </div>
                </div>
            </div>
        </div>
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
