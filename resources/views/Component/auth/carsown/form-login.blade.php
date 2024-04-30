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
                                                    class="text-body-tertiary fw-semibold">BACK TO
                                                    MARKET</span></a></span>
                                    </li>
                                </ul>

                            </div>
                            <div class="position-relative z-n1 mb-6 d-md-block text-center mt-md-15"><img
                                    class="d-dark-none" src="{{ asset('assets/img/reezky/ReezkyLogoNoBG.png') }}"
                                    alt="itsreezky.my.id" width="250" /><img class="d-light-none"
                                    src="{{ asset('assets/img/reezky/ReezkyLogoNoBGWhite.png') }}" alt="itsreezky.my.id"
                                    width="250" style="opacity: 50%" /></div>
                        </div>
                        <div class="col mx-auto">
                            <div class="auth-form-box">
                                <div class="text-center mb-7">

                                    {{-- Logo --}}
                                    <a class="d-flex flex-center text-decoration-none mb-4" href="#">
                                        <div class="d-flex align-items-center fw-bolder fs-3 d-inline-block ms-2">
                                            <img src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}"
                                                alt="reezky" width="75" />
                                        </div>
                                    </a>


                                    <h3 class="text-body-highlight">Sign In</h3>
                                    <p class="text-body-tertiary">Login access to your owner account</p>


                                </div>
                                <div class="position-relative">
                                    <hr class="bg-body-secondary mt-5 mb-4" />
                                    <div class="divider-content-center bg-body-emphasis">Owner Login form</div>
                                </div>

                                {{-- Login Form --}}
                                <form action="" method="POST" role="form"
                                    class="text-start">

                                    @csrf

                                    <div class="mb-3 text-start"><label
                                            class="form-label @error('email') is-invalid @enderror" for="email">Email
                                            address</label>
                                        <div class="form-icon-container">
                                            <input class="form-control form-icon-input" id="email" type="email"
                                                name="email" placeholder="name@example.com" />
                                            <span class="fas fa-user text-body fs-9 form-icon"></span>
                                        </div>
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3 text-start"><label
                                            class="form-label @error('password') is-invalid @enderror"
                                            for="password">Password</label>
                                        <div class="form-icon-container"><input class="form-control form-icon-input"
                                                id="password" type="password" name="password"
                                                placeholder="password" /><span
                                                class="fas fa-key text-body fs-9 form-icon"></span></div>
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="row flex-between-center mb-7">
                                        <div class="col-auto">
                                            <div class="form-check mb-0"><input class="form-check-input"
                                                    id="basic-checkbox" type="checkbox" checked="checked" /><label
                                                    class="form-check-label mb-0" for="basic-checkbox">Remember
                                                    me</label></div>
                                        </div>
                                        <div class="col-auto"><a class="fs-9 fw-semibold" href="#">Forgot Password?</a>
                                        </div>
                                    </div><button type="submit" name="submit" class="btn btn-primary w-100 mb-3">Sign
                                        In</button>

                                </form>

                                <div class="text-center mb-6"><a class="fs-9 fw-bold"
                                        href="{{route('ownregister')}}">Regist an owner account</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
