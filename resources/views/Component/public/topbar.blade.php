<section class="py-0">
    <div class="container-medium">
        <div class="ecommerce-topbar">
            <nav class="navbar navbar-expand-lg navbar-light px-0">
                <div class="row gx-0 gy-2 w-100 flex-between-center">
                    <div class="col-auto"><a class="text-decoration-none" href="#">
                            <div class="d-flex align-items-center"><img
                                    src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}" alt="phoenix"
                                    width="50" />
                                <p class="logo-text mt-2">Autocars</p>
                            </div>
                        </a></div>
                    <div class="col-auto order-md-1 me-3">

        <!-- ===============================================-->
        <!--               USER HAS LOGIN                   -->
        <!-- ===============================================-->

                        @if(Auth::user())

                        <ul class="navbar-nav navbar-nav-icons flex-row me-n2">

                            {{-- SWITCH THEME --}}
                            <li class="nav-item d-flex align-items-center">
                                <div class="theme-control-toggle fa-icon-wait px-2"><input
                                        class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme"><span class="icon"
                                            data-feather="moon"></span></label><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                            </li>

                            {{-- Wishlist --}}
                            <li class="nav-item"><a class="nav-link px-2" href="{{route('wishlist')}}"><span class="text-body-tertiary" data-feather="heart"
                                    style="height:20px;width:20px;"></span></a></li>


                            {{-- CART --}}
                            <li class="nav-item" data-bs-toggle="tooltip"data-bs-placement="bottom" title="Cart"><a class="nav-link px-2" href="#"
                                    role="button"><span class="text-body-tertiary" data-feather="shopping-cart"
                                        style="height:20px;width:20px;"></span></a></li>


                            {{-- NOTIF --}}
                            <li class="nav-item dropdown" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notification"><a
                                    class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger"
                                    id="navbarTopDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                                        class="text-body-tertiary" data-feather="bell"
                                        style="height:20px;width:20px;"></span></a>
                            </li>

                            {{-- PROFILE USER --}}

                            <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#"
                                    role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                    aria-haspopup="true" aria-expanded="false"><span class="text-body-tertiary"
                                        data-feather="user" style="height:20px;width:20px;"></span></a>
                                <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border mt-2"
                                    aria-labelledby="navbarDropdownUser">
                                    <div class="card position-relative border-0">
                                        <div class="card-body p-0">
                                            <div class="text-center pt-4 pb-3">
                                                <div class="avatar avatar-xl ">

                                                    @if(Auth::user()->foto_profile)

                                                    <img class="rounded-circle" src="{{ url(Auth::user()->foto_profile) }}" alt="" /></label>

                                                    @else

                                                    <img class="rounded-circle"
                                                        src="{{asset ('assets/img/reezky/default-profile.png') }}"
                                                        alt="" /></label>

                                                        @endif

                                                </div>
                                                <h6 class="mt-2 text-body-emphasis">{{ Auth::user()->nama }}</h6>
                                                <span class="badge badge-phoenix fs-10 badge-phoenix-info">
                                                    <span class="badge-label">{{ Auth::user()->status }}</span>
                                                    <span class="ms-1" data-feather="check"
                                                        style="height:12.8px;width:12.8px;"></span>
                                                </span>
                                            </div>

                                        </div>
                                        <div class="overflow-auto scrollbar" style="height: 8rem;">
                                            <ul class="nav d-flex flex-column mb-2 pb-1">

                                                <li class="nav-item"><a class="nav-link px-3"
                                                        href="{{route('profile')}}"> <span class="me-2 text-body"
                                                            data-feather="user"></span><span>Profile</span></a>
                                                </li>

                                                <li class="nav-item"><a class="nav-link px-3"
                                                        href="{{route('market')}}">
                                                        <span
                                                            class="fa-solid fa-store me-2 text-body"></span>&nbsp;Market</a>
                                                </li>


                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                            class="me-2 text-body"
                                                            data-feather="help-circle"></span>Help Center</a>
                                                </li>
                                                <li class="nav-item"><a class="nav-link px-3" href="#!"> <span
                                                            class="me-2 text-body"
                                                            data-feather="globe"></span>Language</a></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer p-0 border-top border-translucent">
                                            <hr />
                                            <div class="px-3"> <a
                                                    class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                    data-confirm-delete="true" href="{{route('logout')}}"> <span
                                                        class="me-2" data-feather="log-out">
                                                    </span>Sign out</a></div>
                                            <div class="my-2 text-center fw-bold fs-10 text-body-quaternary"><a
                                                    class="text-body-quaternary me-1" href="#!">Privacy
                                                    policy</a>&bull;<a class="text-body-quaternary mx-1"
                                                    href="#!">Terms</a>&bull;<a class="text-body-quaternary ms-1"
                                                    href="#!">Cookies</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>


        <!-- ===============================================-->
        <!--                GUEST VIEW                      -->
        <!-- ===============================================-->

                        @else

                        <ul class="navbar-nav navbar-nav-icons flex-row me-n2">

                            {{-- SWITCH THEME --}}
                            <li class="nav-item d-flex align-items-center">
                                <div class="theme-control-toggle fa-icon-wait px-2"><input
                                        class="form-check-input ms-0 theme-control-toggle-input" type="checkbox"
                                        data-theme-control="phoenixTheme" value="dark" id="themeControlToggle" /><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-light"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme"><span class="icon"
                                            data-feather="moon"></span></label><label
                                        class="mb-0 theme-control-toggle-label theme-control-toggle-dark"
                                        for="themeControlToggle" data-bs-toggle="tooltip" data-bs-placement="left"
                                        title="Switch theme"><span class="icon" data-feather="sun"></span></label></div>
                            </li>

                            {{-- Wishlist --}}
                            <li class="nav-item publik1" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Wishlist"><a class="nav-link px-2" href="#"
                                role="button"><span class="text-body-tertiary" data-feather="heart"
                                    style="height:20px;width:20px;"></span></a></li>


                            {{-- CART --}}
                            <li class="nav-item publik2" data-bs-toggle="tooltip"data-bs-placement="bottom" title="Cart"><a class="nav-link px-2" href="#"
                                    role="button"><span class="text-body-tertiary" data-feather="shopping-cart"
                                        style="height:20px;width:20px;"></span></a></li>


                            {{-- NOTIF --}}
                            <li class="nav-item dropdown me-5 publik3" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Notification"><a
                                    class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger"
                                    id="navbarTopDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                                        class="text-body-tertiary" data-feather="bell"
                                        style="height:20px;width:20px;"></span></a>
                            </li>

                            <li>
                                <a href="{{route('register')}}">
                                <button class="btn btn-outline-primary me-1 mb-1" type="button">Register</button>
                                </a>
                            </li>

                            <li>
                                <a href="{{route('login')}}">
                                <button class="btn btn-subtle-primary me-1 mb-1" type="button">Login</button>
                                </a>
                            </li>



                        </ul>

                        @endif


                    </div>

                    <div class="col-12 col-md-6">
                        <div class="search-box ecommerce-search-box w-100">
                            <form class="position-relative"><input
                                    class="form-control search-input search form-control-sm" type="search"
                                    placeholder="Search" aria-label="Search" />
                                <span class="fas fa-search search-box-icon"></span>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
