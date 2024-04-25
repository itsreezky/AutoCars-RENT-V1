<section class="py-0">
    <div class="container-small">
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
                    <div class="col-auto order-md-1">
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

                            {{-- CART --}}
                            <li class="nav-item"><a class="nav-link px-2 icon-indicator icon-indicator-primary" href="#"
                                    role="button"><span class="text-body-tertiary" data-feather="shopping-cart"
                                        style="height:20px;width:20px;"></span><span
                                        class="icon-indicator-number">3</span></a></li>

                            {{-- NOTIF --}}
                            <li class="nav-item dropdown"><a
                                    class="nav-link px-2 icon-indicator icon-indicator-sm icon-indicator-danger"
                                    id="navbarTopDropdownNotification" href="#" role="button" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false"><span
                                        class="text-body-tertiary" data-feather="bell"
                                        style="height:20px;width:20px;"></span></a>

                                <div class="dropdown-menu dropdown-menu-end notification-dropdown-menu py-0 shadow border navbar-dropdown-caret mt-2"
                                    id="navbarDropdownNotfication" aria-labelledby="navbarDropdownNotfication">
                                    <div class="card position-relative border-0">
                                        <div class="card-header p-2">
                                            <div class="d-flex justify-content-between">
                                                <h5 class="text-body-emphasis mb-0">Notificatons</h5><button
                                                    class="btn btn-link p-0 fs-9 fw-normal" type="button">Mark
                                                    all as read</button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="scrollbar-overlay" style="height: 27rem;">
                                                <div
                                                    class="px-2 px-sm-3 py-3 notification-card position-relative read border-bottom">
                                                    <div
                                                        class="d-flex align-items-center justify-content-between position-relative">
                                                        <div class="d-flex">
                                                            <div class="avatar avatar-m status-online me-3"><img
                                                                    class="rounded-circle"
                                                                    src="../../../assets/img/team/40x40/30.webp"
                                                                    alt="" /></div>
                                                            <div class="flex-1 me-sm-3">
                                                                <h4 class="fs-9 text-body-emphasis">Jessie
                                                                    Samson</h4>
                                                                <p
                                                                    class="fs-9 text-body-highlight mb-2 mb-sm-3 fw-normal">
                                                                    <span class='me-1 fs-10'>💬</span>Mentioned
                                                                    you in a comment.<span
                                                                        class="ms-2 text-body-quaternary text-opacity-75 fw-bold fs-10">10m</span>
                                                                </p>
                                                                <p class="text-body-secondary fs-9 mb-0"><span
                                                                        class="me-1 fas fa-clock"></span><span
                                                                        class="fw-bold">10:41 AM </span>August
                                                                    7,2021</p>
                                                            </div>
                                                        </div>
                                                        <div class="d-none d-sm-block"><button
                                                                class="btn fs-10 btn-sm dropdown-toggle dropdown-caret-none transition-none notification-dropdown-toggle"
                                                                type="button" data-bs-toggle="dropdown"
                                                                data-boundary="window" aria-haspopup="true"
                                                                aria-expanded="false" data-bs-reference="parent"><span
                                                                    class="fas fa-ellipsis-h fs-10 text-body"></span></button>
                                                            <div class="dropdown-menu dropdown-menu-end py-2"><a
                                                                    class="dropdown-item" href="#!">Mark as
                                                                    unread</a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer p-0 border-top border-translucent border-0">
                                            <div
                                                class="my-2 text-center fw-bold fs-10 text-body-tertiary text-opactity-85">
                                                <a class="fw-bolder"
                                                    href="../../../pages/notifications.html">Notification
                                                    history</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            @if(Auth::user())

                            {{-- PROFILE has Login --}}
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
                                                <img class="rounded-circle"
                                                    src="{{ url(Auth::user()->foto_profile) }}"
                                                    alt="" /></label>

                                                @else

                                                <img class="rounded-circle"
                                                    src="{{asset ('assets/img/reezky/default-profile.png') }}"
                                                    alt="" /></label>
                                                @endif


                                            </div>
                                            <h6 class="mt-2 text-body-emphasis">{{ Auth::user()->nama }}</h6>
                                            <span class="badge badge-phoenix fs-10 badge-phoenix-info">
                                                <span class="badge-label">{{ (Auth::user()->status) }}</span>
                                                <span class="ms-1" data-feather="check"
                                                    style="height:12.8px;width:12.8px;"></span>
                                            </span>
                                        </div>

                                    </div>
                                    <div class="overflow-auto scrollbar" style="height: 8rem;">
                                        <ul class="nav d-flex flex-column mb-2 pb-1">

                                            <li class="nav-item"><a class="nav-link px-3" href="{{ url('/profile') }}"> <span
                                                        class="me-2 text-body"
                                                        data-feather="user"></span><span>Profile</span></a>
                                            </li>

                                            <li class="nav-item"><a class="nav-link px-3" href="{{ url('/market') }}">
                                                <span class="fa-solid fa-store me-2 text-body"></span>&nbsp;Market</a></li>

                                                @if(Auth::user()->status == 'Verified Member')

                                                <li class="nav-item"><a class="nav-link px-3" href="{{ url('/garage') }}">
                                                <span class="fa-solid fa-car me-2 text-body"></span>&nbsp;Garage</a></li>

                                                @else
                                                <li class="nav-item"><a class="nav-link px-3 garagereg1" href="#">
                                                <span class="fa-solid fa-car me-2 text-body"></span>&nbsp;Garage</a></li>

                                                @endif


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
                                                class="btn btn-phoenix-secondary d-flex flex-center w-100" data-confirm-delete="true"
                                                href="{{ route('logout') }}"> <span class="me-2" data-feather="log-out">
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

                            @else

                            <li class="nav-item dropdown"><a class="nav-link px-2" id="navbarDropdownUser" href="#"
                                role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                                aria-haspopup="true" aria-expanded="false"><span class="text-body-tertiary"
                                    data-feather="user" style="height:20px;width:20px;"></span></a>
                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-caret py-0 dropdown-profile shadow border mt-2"
                                aria-labelledby="navbarDropdownUser">
                                <div class="card position-relative border-0">

                                    <div class="card-body p-0 border-top border-translucent">
                                        <div class="px-3"> <a
                                                class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                href="/login"> <span class="me-2" data-feather="log-in">
                                                </span>Sign in</a></div>
                                                <div class="px-3"> <a
                                                    class="btn btn-phoenix-secondary d-flex flex-center w-100"
                                                    href="/register"> <span class="me-2" data-feather="log-in">
                                                    </span>Register</a></div>
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

                            @endif



                        </ul>
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
