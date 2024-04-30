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
    <!--                 SweetAlert                    -->
    <!-- ===============================================-->

    @include('Component.public.alert')

    <!-- ===============================================-->
    <!--                   Main Content                 -->
    <!-- ===============================================-->

    <main class="main" id="top">

        <!-- ===============================================-->
        <!--               Section Topbar                   -->
        <!-- ===============================================-->

        @include('Component.public.topbar')

        <!-- ===============================================-->
        <!--                 Section Menu                   -->
        <!-- ===============================================-->

        <div class="ecommerce-homepage pt-2 mb-9">

            @include('Component.public.menu')

            <!-- ===============================================-->
            <!--               Cars Detail                      -->
            <!-- ===============================================-->

            @include('Component.market.cars-detail')

            <!-- ===============================================-->
            <!--              Similar Product                   -->
            <!-- ===============================================-->

            @include('Component.market.similar-product')

            <!-- ===============================================-->
            <!--                 Support Chat                   -->
            <!-- ===============================================-->

            @if (Auth::user())

            @include('Component.public.support')

            @endif

        </div>

        <!-- ===============================================-->
        <!--                 About                         -->
        <!-- ===============================================-->

        @include('Component.public.about')

        <!-- ===============================================-->
        <!--                 Footer                         -->
        <!-- ===============================================-->

        @include('Component.public.footer')

    </main>

    <!-- ===============================================-->
    <!--               Customize WebApps                -->
    <!-- ===============================================-->

    @include('Component.public.customize')

    <!-- ===============================================-->
    <!--                   JavaScripts                  -->
    <!-- ===============================================-->

    @include('Component.assets.js')

</body>

</html>
