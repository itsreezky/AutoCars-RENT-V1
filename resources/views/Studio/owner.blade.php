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

    <title>{{ Auth::user()->nama }} Owner Profile - AutoCars</title>

    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--                 Stylesheets                    -->
    <!-- ===============================================-->

    @include('Component.assets.css-garage')

</head>

<body class="smart-home bg-gray-200">

    <!-- ===============================================-->
    <!--                 SweetAlert                    -->
    <!-- ===============================================-->

    @include('Component.public.alert')

    <!-- ===============================================-->
    <!--                    Modal                       -->
    <!-- ===============================================-->

    @include('Component.owner-studio.modal-edit')

    @include('Component.owner-studio.modal-foto')

    <!-- ===============================================-->
    <!--                 Information                    -->
    <!-- ===============================================-->

    @include('Component.owner-studio.information')

    <!-- ===============================================-->
    <!--                   JavaScripts                  -->
    <!-- ===============================================-->

    @include('Component.assets.js-garage')

</body>

@else

@include('Component.public.403')

@endif

</html>
