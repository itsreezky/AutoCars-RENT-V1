<div class="content">

    <div class="row g-3">
        <div class="col-xxl-6 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex d-xl-inline-block d-xxl-flex align-items-center justify-content-between mb-3">
                        <div class="d-flex align-items-center gap-2">
                            <div class="avatar avatar-l">
                                <img class="rounded-circle" src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}"
                                    alt="" />
                            </div>
                            <p class="mb-0">
                                <b class="fw-semi-bold mb-0 text-800"> Administrator Autocars | Dashboard </b>
                        </div>


                    </div>
                    <!-- VIDEOTRON -->
                    <video playsinline autoplay muted loop style="width: 100%;">
                        <source src="http://tools.itsreezky.my.id/assets/video/zee.mp4" type="video/mp4" />
                    </video>
                    <!-- END VIDEOTRON -->

                    <!-- MUSIK -->
                    <audio hidden autoplay loop>
                        <source src="http://tools.itsreezky.my.id/assets/musik/firstrabbit.mp3" type="audio/mpeg">
                        <source src="source/music/firstrabbit.ogg" type="audio/ogg">
                        Your browser does not support the audio element.
                    </audio>
                    <!-- MUSIK -->

                    <div class="mt-3 text-center" style="font-size: small;">
                        <b><i class="fa-solid fa-music"></i> Music : </b> <a
                            href="https://www.youtube.com/watch?v=QlBFfbpA8DQ">
                            JKT48 - First Rabbit [ Lo-Fi Version ] </a>
                    </div>

                </div>
            </div>
        </div>


        <div class="col-xxl-3 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <b class="fw-bold btn btn-falcon-info me-1 mb-1">
                        <i class="fa-solid fa-list-check me-1"></i>
                        Data Autocars </b>
                    <hr>
                    <center>

                        <a href="{{route('administrator.users') }}">
                            <button class="btn btn-falcon-default btn-sm mb-3">
                                <span class="fa-solid fa-users"></span>
                                <span class="d-md-inline-block ms-1">Data Users</span></button></a>

                        <a href="{{route('administrator.owners') }}">
                            <button class="btn btn-falcon-default btn-sm mb-3">
                                <span class="fa-solid fa-file-excel"></span>
                                <span class="d-md-inline-block ms-1">Data Owners</span></button></a>

                        <a href="{{route('administrator.cars') }}">
                            <button class="btn btn-falcon-default btn-sm mb-3">
                                <span class="fa-solid fa-car"></span>
                                <span class="d-md-inline-block ms-1">Data Cars</span></button></a>

                    </center>
                    <div class="alert alert-outline-info d-flex align-items-center" role="alert">
                        <span class="fas fa-info-circle text-info fs-5 me-3"></span>
                        <p class="mb-0 flex-1"><b>INFORMASI</b> <br>
                            Klik untuk melihat data yang tersedia.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xxl-3 col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <img src="{{asset ('assets/img/reezky/ReezkyLogoNoBG.png') }}" class="d-dark-none" alt="reezky"
                            width="280">
                        <img src="{{asset ('assets/img/reezky/ReezkyLogoNoBGWhite.png') }}" class="d-light-none"
                            alt="reezky" width="280">
                        <p class="fs-9 mt-3">Made With <i class="fa fa-heart" style="color: red"></i> <br>
                            <a href="http://hello.itsreezky.my.id">- Reezky -</a>
                        </p>
                        <div class="d-grid">
                            <a class="btn btn-sm btn-outline-primary" href="http://itsreezky.my.id"
                                target="_blank">Visit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

