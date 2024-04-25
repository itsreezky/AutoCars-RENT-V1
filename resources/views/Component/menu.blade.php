<section class="py-0 mt-3">
    <div class="container-small">
        <div class="scrollbar">

            @if(Auth::user())
            <div class="d-flex justify-content-between"><a class="icon-nav-item" href="#!">
                    <div class="icon-container mb-2 bg-warning-subtle light"><span
                            class="fs-4 uil uil-star text-warning"></span></div>
                    <p class="nav-label">Deals</p>
                </a><a class="icon-nav-item" href="/market">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-shop"></span></div>
                    <p class="nav-label">Market</p>
                </a><a class="icon-nav-item" href="/profile">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-user"></span></div>
                    <p class="nav-label">Profil</p>
                </a>

                @if(Auth::user()->status == 'Verified Member')
                <a class="icon-nav-item" href="/garage">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-car-sideview"></span></div>
                    <p class="nav-label">Garage</p>
                </a>
                @else
                <a class="icon-nav-item garagereg" href="#">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-car-sideview"></span></div>
                    <p class="nav-label">Garage</p>
                </a>
                @endif
                <a class="icon-nav-item" href="/logout" data-confirm-delete="true">
                    <div class="icon-container mb-2"><span class="fs-4 fa-solid fa-arrow-right-from-bracket"></span></div>
                    <p class="nav-label">Logout</p>
                </a>
                </a><a class="icon-nav-item" href="#settings-offcanvas" data-bs-toggle="offcanvas">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-palette"></span></div>
                    <p class="nav-label">Customize</p>
                </a></div>
            @else
            <div class="d-flex justify-content-between"><a class="icon-nav-item" href="#!">
                <div class="icon-container mb-2 bg-warning-subtle light"><span
                        class="fs-4 uil uil-star text-warning"></span></div>
                <p class="nav-label">Deals</p>
            </a><a class="icon-nav-item" href="/market">
                <div class="icon-container mb-2"><span class="fs-4 uil uil-shop"></span></div>
                <p class="nav-label">Market</p>
            </a><a class="icon-nav-item" href="/login">
                <div class="icon-container mb-2"><span class="fs-4 fa-solid fa-arrow-right-to-bracket"></span></div>
                <p class="nav-label">Login</p>
            </a><a class="icon-nav-item" href="/register">
                <div class="icon-container mb-2"><span class="fs-4 fa-regular fa-id-card"></span></div>
                <p class="nav-label">Register</p>
            </a><a class="icon-nav-item" href="#">
                <div class="icon-container mb-2"><span class="fs-4 uil uil-wrench"></span></div>
                <p class="nav-label">Setting</p>
            </a>
            </a><a class="icon-nav-item" href="#settings-offcanvas" data-bs-toggle="offcanvas">
                <div class="icon-container mb-2"><span class="fs-4 uil uil-palette"></span></div>
                <p class="nav-label">Customize</p>
            </a></div>
            @endif


        </div>
    </div><!-- end of .container-->
</section>
