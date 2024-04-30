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

<body class="bg-body-emphasis" style="--phoenix-scroll-margin-top: 1.2rem;">

    <!-- ===============================================-->
    <!--                SweetAlert                      -->
    <!-- ===============================================-->

    @include('Component.public.alert')

    <!-- ===============================================-->
    <!--               Main Content                     -->
    <!-- ===============================================-->

    <main class="main" id="top">

        <!-- ===============================================-->
        <!--               Nav Higher                       -->
        <!-- ===============================================-->
        @if(Auth::user())

        @else

        @include('Component.market.navhigher')

        @endif

        <!-- ===============================================-->
        <!--               Section Topbar                   -->
        <!-- ===============================================-->

        @include('Component.public.topbar')

        <!-- ===============================================-->
        <!--                 Section Menu                   -->
        <!-- ===============================================-->

        @include('Component.public.menu')

        <!-- ===============================================-->
        <!--                 Section Menu                   -->
        <!-- ===============================================-->

        @include('Component.market.heroheader')

        <!-- ===============================================-->
        <!--                 Banner Market                  -->
        <!-- ===============================================-->

        @include('Component.market.banner')


        <!-- ===============================================-->
        <!--                 Promoted Cars                  -->
        <!-- ===============================================-->

        @include('Component.market.promoted-cars')

        <!-- ===============================================-->
        <!--                 Available Cars                 -->
        <!-- ===============================================-->

        @include('Component.market.available-car')


        <!-- ===============================================-->
        <!--                   Get App                      -->
        <!-- ===============================================-->

        @include('Component.market.getapp')

        <!-- ===============================================-->
        <!--                 Support Chat                   -->
        <!-- ===============================================-->

        @if(Auth::user())

        @include('Component.public.support')

        @endif

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
