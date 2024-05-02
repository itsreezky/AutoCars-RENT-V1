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
                                <div class="text-center mb-5">
                                    <div class="avatar avatar-4xl mb-4"><img class="rounded-circle"
                                            src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}" alt="" /></div>
                                    <h2 class="text-body-highlight"> <span class="fw-normal">Hello </span>Administrator
                                        @if ($errors->any())
                                    <div class="alert alert-danger">

                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                    </h2>
                                    <p class="text-body-tertiary">Enter your code to access <br
                                            class="d-sm-none d-md-block d-xxl-none" />the admin</p>
                                </div>
                                <form action="" method="POST" role="form">
                                @csrf
                                <input class="form-control mb-3" type="email" name="email" id="email" placeholder="Your Administrator Email">
                                <input class="form-control mb-3" id="password" type="password" name="password" placeholder="Enter Password" />
                                <button class="btn btn-primary w-100" type="submit" name="submit">Check</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
