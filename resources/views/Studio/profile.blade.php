<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

@if(Auth::user()->status == 'Regular Member')

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Profile - AutoCars</title>

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

        @include('Component.public.menu')

        <!-- ===============================================-->
        <!--                Profile Modal                   -->
        <!-- ===============================================-->

        @include('Component.profile-studio.profile-edit')

        @include('Component.profile-studio.profile-foto')

        <!-- ===============================================-->
        <!--                 Profile Page                   -->
        <!-- ===============================================-->

        @include('Component.profile-studio.profile-page')

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

@elseif(Auth::user()->status == 'Verified Member')

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Profile - AutoCars</title>

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

        @include('Component.public.menu')

        <!-- ===============================================-->
        <!--                Profile Modal                   -->
        <!-- ===============================================-->

        @include('Component.profile-studio.profile-edit')

        @include('Component.profile-studio.profile-foto')

        <!-- ===============================================-->
        <!--                 Profile Page                   -->
        <!-- ===============================================-->

        @include('Component.profile-studio.profile-page')

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

@else

@include('Component.public.403')

@endif

</html>
