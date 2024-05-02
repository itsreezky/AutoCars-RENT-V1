<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Administrator - AutoCars</title>

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
    <!--                 Form Login                     -->
    <!-- ===============================================-->

    @include('Component.auth.administrator.form-login')


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

