<div class="container position-sticky z-index-sticky top-0">
    <div class="row">
        <div class="col-12">
            <nav
                class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-3 shadow position-absolute mt-4 my-3 py-2 start-0 end-0 mx-4">
                <div class="container-fluid px-0">
                    <a class="navbar-brand font-weight-bolder ms-sm-3  d-none d-md-block"
                        href="{{ url('/market') }}" rel="tooltip" title="Designed and Coded by Reezky"
                        data-placement="bottom" target="_blank">
                        <img src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}" width="50"
                            alt="Logo Reezky"><span class="fw-10"> AutoCars - RENT</span>
                    </a>

                    <a class="navbar-brand font-weight-bolder ms-sm-3  d-block d-md-none"
                        href="{{ url('/market') }}" rel="tooltip" title="Designed and Coded by Reezky"
                        data-placement="bottom" target="_blank">
                        <img src="{{asset ('assets/img/reezky/ReezkyIconROrange.png') }}" width="50"
                            alt="Logo Reezky">
                    </a>

                    <button class="navbar-toggler shadow-none ms-md-2" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon mt-2">
                            <ul class="navbar-nav navbar-nav-hover ms-auto">
                                <a href="{{route('own.profile')}}"><button class="btn btn-outline-dark mt-3">↩ Back To Profile</button></a>
                             </ul>
                        </span>
                    </button>

                    <div class="collapse navbar-toogler w-100 pt-3 pb-2 py-lg-0" id="navigation">
                        <ul class="navbar-nav navbar-nav-hover ms-auto">
                           <a href="{{route('own.profile')}}">
                            <button class="btn btn-outline-dark mt-3">
                            <i class="fa-solid fa-arrow-left"></i> Back To Profile</button></a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

