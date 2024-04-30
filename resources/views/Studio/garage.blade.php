<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

@if(Auth::user()->status == 'Verified Owner')

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>{{ Auth::user()->nama }} Cars Garage - AutoCars</title>

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

    @include('Component.public.alert')


    <!-- ===============================================-->
    <!--                 Garage Navbar                  -->
    <!-- ===============================================-->

    @include('Component.garage-studio.garage-navbar')


    <!-- ===============================================-->
    <!--                 Garage Modal                   -->
    <!-- ===============================================-->

    @include('Component.garage-studio.garage-edit')

    @include('Component.garage-studio.garage-tambah')

    @include('Component.garage-studio.garage-data')

    @include('Component.garage-studio.garage-delete')


    <!-- ===============================================-->
    <!--                Garage Information              -->
    <!-- ===============================================-->

    @include('Component.garage-studio.garage-header')



    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <!-- ===============================================-->
        <!--                Garage Information              -->
        <!-- ===============================================-->

        @include('Component.garage-studio.garage-information')

        <!-- ===============================================-->
        <!--                 Car Controller                 -->
        <!-- ===============================================-->

        @include('Component.garage-studio.garage-carcontroller')

    </div>

    <!-- ===============================================-->
    <!--                 Garage Cam                     -->
    <!-- ===============================================-->

    @include('Component.garage-studio.garage-cam')

    <!-- ===============================================-->
    <!--                    Footer                      -->
    <!-- ===============================================-->

    @include('Component.garage-studio.garage-footer')

    <!-- ===============================================-->
    <!--                   JavaScripts                  -->
    <!-- ===============================================-->

    @include('Component.assets.js-garage')

</body>

@else

@include('Component.public.403')

@endif

</html>
