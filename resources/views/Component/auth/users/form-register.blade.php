<div class="container-fluid bg-body-tertiary dark__bg-gray-1200">
    <div class="bg-holder bg-auth-card-overlay" style="background-image:url(assets/img/bg/37.png)"></div>
    <div class="row flex-center position-relative min-vh-100 g-0 py-5">
        <div class="col-11 col-sm-10 col-xl-8">
            <div class="card border border-translucent auth-card">
                <div class="card-body pe-md-0">
                    <div class="row align-items-center gx-0 gy-7">
                        <div
                            class="col-auto bg-body-highlight dark__bg-gray-1100 rounded-3 position-relative overflow-hidden auth-title-box">
                            <div class="bg-holder" style="background-image:url(assets/img/bg/38.png);"></div>
                            <div
                                class="position-relative px-4 px-lg-7 pt-7 pb-7 pb-sm-5 text-center text-md-start pb-lg-7 card-sign-up">
                                <h3 class="mb-3 text-body-emphasis fs-7">AutoCars - RENT</h3>
                                <p class="text-body-tertiary">Application that makes it easy for users to
                                    search, book and rent cars online with a variety of vehicle options and
                                    flexible pick-up locations.</p>

                                <ul class="list-unstyled mb-0 w-max-content w-md-auto">

                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-body-tertiary fw-semibold">Fast</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-body-tertiary fw-semibold">Simple</span></li>
                                    <li class="d-flex align-items-center"><span
                                            class="uil uil-check-circle text-success me-2"></span><span
                                            class="text-body-tertiary fw-semibold">Responsive</span></li>
                                            <li class="d-flex align-items-center mt-5">
                                                <span class="badge badge-phoenix badge-phoenix-primary">
                                                <a href="{{route('market')}}"><span
                                                class="uil uil-left-arrow-from-left text-body-tertiary me-2"></span><span
                                                class="text-body-tertiary fw-semibold">BACK TO MARKET</span></a></span></li>
                                </ul>

                            </div>
                            <div class="position-relative z-n1 mb-6 d-md-block text-center mt-md-15"><img
                                    class="d-dark-none"
                                    src="{{ asset('assets/img/reezky/ReezkyLogoNoBG.png') }}"
                                    alt="itsreezky.my.id" width="250" /><img class="d-light-none"
                                    src="{{ asset('assets/img/reezky/ReezkyLogoNoBGWhite.png') }}"
                                    alt="itsreezky.my.id" width="250" style="opacity: 50%" /></div>
                        </div>
                        <div class="col mx-auto">
                            <div class="auth-form-box">
                                <div class="text-center mt-5">
                                     {{-- Logo --}}
                                     <a
                                     class="d-flex flex-center text-decoration-none mb-4"
                                     href="#">
                                     <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block ms-2">
                                         <img src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}" alt="reezky"
                                             width="75" />
                                     </div>
                                 </a>

                                    <h3 class="text-body-highlight">Registration Member</h3>
                                    <p class="text-body-tertiary">Create your account today</p>


                                </div>
                                <div class="position-relative">
                                    <hr class="bg-body-secondary mt-5 mb-4" />
                                    <div class="divider-content-center bg-body-emphasis">have an account?<a
                                            class="fs-9 fw-bold" href="{{route('login')}}"> Login</a></div>
                                </div>
                                <div class="card theme-wizard mb-5" data-theme-wizard="data-theme-wizard">
                                    <div class="card-header bg-body-highlight pt-3 pb-2 border-bottom-0">
                                        <ul class="nav justify-content-between nav-wizard nav-wizard-success"
                                            role="tablist">
                                            <li class="nav-item" role="presentation"><a
                                                    class="nav-link active fw-semibold"
                                                    href="#bootstrap-wizard-validation-tab1"
                                                    data-bs-toggle="tab" data-wizard-step="1"
                                                    aria-selected="true" role="tab">
                                                    <div class="text-center d-inline-block"><span
                                                            class="nav-item-circle-parent"><span
                                                                class="nav-item-circle">
                                                                <svg class="svg-inline--fa fa-user"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="user"
                                                                    role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z">
                                                                    </path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                        <span class="d-none d-md-block mt-1 fs-9">Account</span>
                                                    </div>
                                                </a></li>
                                            <li class="nav-item" role="presentation"><a
                                                    class="nav-link fw-semibold"
                                                    href="#bootstrap-wizard-validation-tab4"
                                                    data-bs-toggle="tab" data-wizard-step="4"
                                                    aria-selected="false" tabindex="-1" role="tab">
                                                    <div class="text-center d-inline-block"><span
                                                            class="nav-item-circle-parent"><span
                                                                class="nav-item-circle"><svg
                                                                    class="svg-inline--fa fa-check"
                                                                    aria-hidden="true" focusable="false"
                                                                    data-prefix="fas" data-icon="check"
                                                                    role="img"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    viewBox="0 0 448 512" data-fa-i2svg="">
                                                                    <path fill="currentColor"
                                                                        d="M438.6 105.4C451.1 117.9 451.1 138.1 438.6 150.6L182.6 406.6C170.1 419.1 149.9 419.1 137.4 406.6L9.372 278.6C-3.124 266.1-3.124 245.9 9.372 233.4C21.87 220.9 42.13 220.9 54.63 233.4L159.1 338.7L393.4 105.4C405.9 92.88 426.1 92.88 438.6 105.4H438.6z">
                                                                    </path>
                                                                </svg>
                                                            <span class="d-none d-md-block mt-1 fs-9">Done</span>
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </div>


                                    {{--  Register Form --}}
                                    <form action="{{ route('register') }}" method="POST">

                                        @csrf

                                        <div class="card-body pt-4 pb-0">
                                            <div class="tab-content">
                                                <div class="tab-pane active" role="tabpanel"
                                                    aria-labelledby="bootstrap-wizard-validation-tab1"
                                                    id="bootstrap-wizard-validation-tab1">

                                                    <div class="mb-2">
                                                        <label class="form-label text-body"
                                                            for="bootstrap-wizard-validation-wizard-name">Name</label><input
                                                            class="form-control" type="text" name="nama"
                                                            placeholder="e.g Reezky" required="required"
                                                            value="{{ old('nama') }}" id="nama">
                                                        <div class="invalid-feedback">Please input full name.
                                                        </div>
                                                    </div>
                                                    <div class="mb-2"><label class="form-label"
                                                            for="bootstrap-wizard-validation-wizard-email">Email*</label><input
                                                            class="form-control" type="email" name="email"
                                                            placeholder="e.g hello@itsreezky.my.id"
                                                            required="required" value="{{ old('email') }}"
                                                            id="email">
                                                        <div class="invalid-feedback">You must add email</div>
                                                    </div>
                                                    <div class="row g-3 mb-3">
                                                        <div class="col-sm-6">
                                                            <div class="mb-2 mb-sm-0"><label
                                                                    class="form-label text-body"
                                                                    for="bootstrap-wizard-validation-wizard-password">Password*</label><input
                                                                    class="form-control" type="password"
                                                                    name="password" placeholder="Password"
                                                                    required="required" id="password"
                                                                    data-wizard-password="true">
                                                                <div class="invalid-feedback">Please enter
                                                                    password</div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="mb-2"><label
                                                                    class="form-label text-body"
                                                                    for="bootstrap-wizard-validation-wizard-confirm-password">Confirm
                                                                    Password*</label><input class="form-control"
                                                                    type="password" name="confirm-password"
                                                                    placeholder="Confirm Password"
                                                                    required="required" id="confirm-password"
                                                                    data-wizard-confirm-password="true">
                                                                <div class="invalid-feedback">Passwords need to
                                                                    match</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-check"><input class="form-check-input"
                                                            type="checkbox" name="terms" required="required"
                                                            checked="checked"
                                                            id="bootstrap-wizard-validation-wizard-checkbox"><label
                                                            class="form-check-label text-body"
                                                            for="bootstrap-wizard-validation-wizard-checkbox">I
                                                            accept the <a href="#!">terms </a>and <a
                                                                href="#!">privacy policy</a></label></div>

                                                </div>
                                                <div class="tab-pane" role="tabpanel"
                                                    aria-labelledby="bootstrap-wizard-validation-tab4"
                                                    id="bootstrap-wizard-validation-tab4">
                                                    <div class="row flex-center pb-8 pt-4 gx-3 gy-4">
                                                        <div class="col-12 col-sm-auto">
                                                            <div class="text-center text-sm-start"><img
                                                                    class="d-dark-none"
                                                                    src="{{asset ('assets/img/spot-illustrations/38.webp') }}"
                                                                    alt="" width="220"><img class="d-light-none"
                                                                    src="{{asset ('assets/img/spot-illustrations/dark_38.webp') }}"
                                                                    alt="" width="220"></div>
                                                        </div>
                                                        <div class="col-12 col-sm-auto">
                                                            <div class="text-center text-sm-start">
                                                                <h5 class="mb-3">You are all done!</h5>
                                                                <p class="text-body-emphasis fs-9">Click
                                                                    Validation and you can
                                                                    access your account<br>anytime anywhere</p>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-primary px-6">Validation</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>



                                    <div class="card-footer border-top-0"
                                        data-wizard-footer="data-wizard-footer">
                                        <div class="d-flex pager wizard list-inline mb-0"><button
                                                class="d-none btn btn-link ps-0" type="button"
                                                data-wizard-prev-btn="data-wizard-prev-btn"><svg
                                                    class="svg-inline--fa fa-chevron-left me-1"
                                                    data-fa-transform="shrink-3" aria-hidden="true"
                                                    focusable="false" data-prefix="fas" data-icon="chevron-left"
                                                    role="img" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 320 512" data-fa-i2svg=""
                                                    style="transform-origin: 0.3125em 0.5em;">
                                                    <g transform="translate(160 256)">
                                                        <g
                                                            transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                                            <path fill="currentColor"
                                                                d="M224 480c-8.188 0-16.38-3.125-22.62-9.375l-192-192c-12.5-12.5-12.5-32.75 0-45.25l192-192c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25L77.25 256l169.4 169.4c12.5 12.5 12.5 32.75 0 45.25C240.4 476.9 232.2 480 224 480z"
                                                                transform="translate(-160 -256)"></path>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <!-- <span class="fas fa-chevron-left me-1" data-fa-transform="shrink-3"></span> Font Awesome fontawesome.com -->Previous</button>
                                            <div class="flex-1 text-end"><button
                                                    class="btn btn-primary px-6 px-sm-6" type="submit"
                                                    data-wizard-next-btn="data-wizard-next-btn">Next<svg
                                                        class="svg-inline--fa fa-chevron-right ms-1"
                                                        data-fa-transform="shrink-3" aria-hidden="true"
                                                        focusable="false" data-prefix="fas"
                                                        data-icon="chevron-right" role="img"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"
                                                        data-fa-i2svg=""
                                                        style="transform-origin: 0.3125em 0.5em;">
                                                        <g transform="translate(160 256)">
                                                            <g
                                                                transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)">
                                                                <path fill="currentColor"
                                                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"
                                                                    transform="translate(-160 -256)"></path>
                                                            </g>
                                                        </g>
                                                    </svg>
                                                    <!-- <span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-3"> </span> Font Awesome fontawesome.com --></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
