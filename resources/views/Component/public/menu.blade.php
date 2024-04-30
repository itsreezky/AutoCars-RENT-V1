<section class="py-0 mt-3">
    <div class="container-small">
        <div class="scrollbar">
            <div class="d-flex justify-content-center">

                @if(Auth::user())

                <a class="icon-nav-item" href="{{route('wishlist')}}">
                    <div class="icon-container mb-2 bg-warning-subtle light">
                        <span class="fs-4 uil uil-heart text-warning"></span>
                    </div>
                    <p class="nav-label">Wishlist</p>
                </a>

                <a class="icon-nav-item" href="{{route('market')}}">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-shop"></span></div>
                    <p class="nav-label">Market</p>
                </a>

                <a class="icon-nav-item" href="{{route('profile')}}">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-user"></span></div>
                    <p class="nav-label">Profil</p>
                </a>

                @if(Auth::user()->status == 'Regular Member')
                <a class="icon-nav-item" href="{{route('profile')}}">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-user-check mt-1 ms-1"></span></div>
                    <p class="nav-label">Verified</p>
                </a>
                @endif


                <a class="icon-nav-item" href="#settings-offcanvas" data-bs-toggle="offcanvas">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-palette"></span></div>
                    <p class="nav-label">Customize</p>
                </a>

                <a class="icon-nav-item" href="{{route('logout')}}" data-confirm-delete="true">
                    <div class="icon-container mb-2"><span class="fs-4 fa-solid fa-arrow-right-from-bracket"></span>
                    </div>
                    <p class="nav-label">Logout</p>
                </a>

                @else

                <a class="icon-nav-item" href="{{route('market')}}">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-shop"></span></div>
                    <p class="nav-label">Market</p>
                </a>

                <a class="icon-nav-item" href="#settings-offcanvas" data-bs-toggle="offcanvas">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-palette"></span></div>
                    <p class="nav-label">Customize</p>
                </a>

                <a class="icon-nav-item" href="{{route('register')}}" data-confirm-delete="true">
                    <div class="icon-container mb-2"><span class="fs-4 uil uil-user-plus"></span>
                    </div>
                    <p class="nav-label">Register</p>
                </a>

                <a class="icon-nav-item" href="{{route('login')}}" data-confirm-delete="true">
                    <div class="icon-container mb-2"><span class="fs-4 fa-solid fa-arrow-right-from-bracket"></span>
                    </div>
                    <p class="nav-label">Login</p>
                </a>

                @endif
            </div>
        </div>
</section>
