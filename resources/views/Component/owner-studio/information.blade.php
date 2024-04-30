<header class="bg-gradient-dark">
    <div class="page-header min-vh-100"
        style="background-image: url('https://images.unsplash.com/photo-1493673272479-a20888bcee10?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');"
        loading="lazy">
        <span class="mask bg-gradient-dark opacity-6"></span>

        <div class="container">
            <div class="row pt-5">
                <div class="ms-auto">
                    <center>
                        <h1 class="display-3 font-weight-bold mt-lg-n4 mb-0 text-white" id="jam"></b></h1>
                        <h4 class="text-uppercase mb-0 ms-1 text-white" id="tanggal"></h4>
                        <div class="col-lg-4 col-md-12 mt-5 mt-lg-0 d-none d-md-block">
                            <div class="card card-background card-background-mask-dark move-on-hover align-items-start">
                                <div class="cursor-pointer">
                                    <div class="full-background"
                                        style="background-image: url('https://images.unsplash.com/photo-1470813740244-df37b8c1edcb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80')">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="text-white mb-0 ms-4">There Is A Light That Never Goes Out</h5>
                                        <p class="text-white text-sm">The Smiths</p>
                                        <div class="d-flex mt-3 ms-8">
                                            <button class="btn btn-outline-white rounded-circle p-2 mb-0" type="button"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Prev">
                                                <i class="fa-solid fa-backward-fast p-2 mt-0"></i>
                                            </button>
                                            <button class="btn btn-outline-white rounded-circle p-2 mx-2 mb-0"
                                                type="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Pause">
                                                <i class="fa-solid fa-pause p-2 mt-0"></i> <button
                                                    class="btn btn-outline-white rounded-circle p-2 mb-0" type="button"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title="Next">
                                                    <i class="fa-solid fa-forward-fast p-2 mt-0"></i> </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-lg-1 col-md-1 pt-3 pt-lg-0 ms-lg-5 text-center ms-lg-auto">

                    <a href="javascript:;" class="avatar avatar-xxl border-0 mt-5" data-bs-toggle="tooltip"
                        data-bs-placement="right" title="{{ (Auth::user()->nama) }}">
                        @if(Auth::user()->foto_profile)
                        <img src="{{ url(Auth::user()->foto_profile) }}" class="border-radius-lg"
                            alt="Image placeholder">

                        @else
                        <img src="{{ url('https://ps.w.org/user-avatar-reloaded/assets/icon-256x256.png') }}"
                            class="border-radius-lg" alt="Image placeholder">
                        @endif
                    </a>

                    <a data-bs-target="#editfotoprofile" data-bs-toggle="modal">
                        <center><span class="badge rounded-pill bg-dark ms-1 mt-4">Ganti Foto</span></center>
                    </a>
                    <a href="{{url('owner/logout')}}">
                        <center><span class="badge rounded-pill bg-danger ms-2 mt-4">Logout</span></center>
                    </a>

                </div>

                <div class="col-lg-8 col-md-11 ps-md-5 mb-5 mb-md-0 me-lg-auto">
                    <div class="row mt-4">
                        <div class="col-lg-12 col-md-6 mt-4 mt-sm-0 mb-5">
                            <div class="card bg-gradient-dark move-on-hover">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <center><span class="badge rounded-pill bg-dark mb-3">Owner
                                                Information</span></center>
                                        <div class="ms-auto mb-2">
                                            <h1 class="text-white text-end mb-0 mt-n2"><i
                                                    class="fa-regular fa-user fa-2xs"></i></h1>

                                        </div>
                                    </div>

                                    <section>
                                        <div class="row justify-space-start">
                                            <div class="col-lg-6">
                                                <label class="text-white">Owner ID</label>
                                                <input type="text" placeholder="{{ Auth::user()->owner_id }}"
                                                    class="form-control is-valid" readonly>
                                            </div>
                                            <div class="col-lg-6 mt-1">
                                                <label class="text-white">Status Account</label>
                                                <input type="text" placeholder="{{ Auth::user()->status }}"
                                                    class="form-control is-valid" readonly>
                                            </div>
                                        </div>
                                        <div class="row justify-space-start mt-3">
                                            <div class="col-lg-4">
                                                <label class="text-white">Nama</label>
                                                <input type="text" placeholder="{{ Auth::user()->nama }}"
                                                    class="form-control is-valid" readonly>
                                            </div>
                                            <div class="col-lg-4 mt-1">
                                                <label class="text-white">Email</label>
                                                <input type="text" placeholder="{{ Auth::user()->email }}"
                                                    class="form-control is-valid" readonly>
                                            </div>
                                            <div class="col-lg-4 mt-1">
                                                <label class="text-white">No Hp</label>
                                                <input type="text" placeholder="{{ Auth::user()->hp }}"
                                                    class="form-control is-valid" readonly>
                                            </div>
                                        </div>
                                        <div class="row justify-space-start mt-3">
                                            <div class="col-lg-12">
                                                <label class="text-white">Alamat Garasi</label>
                                                <input type="text"
                                                    placeholder="{{ Auth::user()->alamat_garasi }} , Kota {{ Auth::user()->kota }}"
                                                    class="form-control is-valid" readonly>
                                            </div>

                                    </section>
                                </div>
                            </div>
                            <div class="card move-on-hover mt-2">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="mb-0">Edit Information</p>
                                        <a class="ms-auto icon-move-right" data-bs-target="#editprofile"
                                            title="View and Edit Profile" data-bs-toggle="modal">
                                            Click<i class="fas fa-arrow-right text-xs ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-6 mt-4 mt-sm-0">
                            <div class="card bg-gradient-dark move-on-hover">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <center><span class="badge rounded-pill bg-dark mb-3">Garage
                                                Information</span></center>
                                        <div class="ms-auto mb-3">
                                            <h1 class="text-white text-end mb-0 mt-n2"><i
                                                    class="fa-solid fa-warehouse fa-2xs"></i></h1>

                                        </div>
                                    </div>
                                    <div class="row">

                                        @if(isset($ownerdata))
                                        @foreach($ownerdata as $car)
                                        <div class="col-lg-4">
                                        <p class="fa-solid fa-car text-white"></p>
                                        <p class="badge badget-dark text-white">{{ $car->merk }} | {{ $car->model }}</p>
                                        <br>
                                    </div>
                                        @endforeach
                                        @endif

                                    </div>
                                </div>
                            </div>
                            <div class="card move-on-hover mt-4">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <p class="mb-0">Visit Garage Studio</p>
                                        <a class="ms-auto icon-move-right" href="{{ url ('/garage') }}"
                                            title="Visit Garage Studio">
                                            Visit<i class="fas fa-arrow-right text-xs ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
