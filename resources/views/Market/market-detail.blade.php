<!DOCTYPE html>
<html data-navigation-type="default" data-navbar-horizontal-shape="default" lang="en-US" dir="ltr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--                Document Title                  -->
    <!-- ===============================================-->

    <title>Market - AutoCars</title>

    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--                 Stylesheets                    -->
    <!-- ===============================================-->

    @include('Component.assets.css')

</head>

<body>


    <!-- ===============================================-->
    <!--                 SweetAlert                    -->
    <!-- ===============================================-->

    @include('sweetalert::alert')

    <!-- ===============================================-->
    <!--                   Main Content                 -->
    <!-- ===============================================-->

    <main class="main" id="top">

        <!-- ===============================================-->
        <!--               Section Topbar                   -->
        <!-- ===============================================-->

        @include('Component.topbar')

        <!-- ===============================================-->
        <!--                 Section Menu                   -->
        <!-- ===============================================-->

        <div class="ecommerce-homepage pt-2 mb-9">

            @include('Component.menu')

            <!-- ===============================================-->
            <!--               Section Banner                   -->
            <!-- ===============================================-->

            <div class="pt-5 pb-9">

                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="py-0">
                  <div class="container-small">
                    <div class="row g-5 mb-5 mb-lg-8" data-product-details="data-product-details">
                      <div class="col-12 col-lg-6">
                        <div class="row g-3 mb-3">
                          <div class="col-12 col-md-2 col-lg-12 col-xl-2">
                            <div class="swiper-products-thumb swiper swiper theme-slider overflow-visible" id="swiper-products-thumb"></div>
                          </div>
                          <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                            <div class="d-flex align-items-center border border-translucent rounded-3 text-center p-5 h-100">
                            <img class="img-fluid" src="../{{ $cars->foto_mobil }}" alt="">
                            </div>
                          </div>
                        </div>
                        <div class="d-flex"><button class="btn btn-lg btn-outline-warning rounded-pill w-100 me-3 px-2 px-sm-4 fs-9 fs-sm-8"><span class="me-2 far fa-heart"></span>Add to wishlist</button><button class="btn btn-lg btn-warning rounded-pill w-100 fs-9 fs-sm-8"><span class="fas fa-shopping-cart me-2"></span>Add to cart</button></div>
                      </div>
                      <div class="col-12 col-lg-6">
                        <div class="d-flex flex-column justify-content-between h-100">
                          <div>
                            <div class="d-flex flex-wrap">
                              <div class="me-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span></div>
                              <p class="text-primary fw-semibold mb-2">6548 People rated and reviewed </p>
                            </div>
                            <h3 class="mb-3 lh-sm">{{ $cars->merk }} | {{ $cars->model }}</h3>
                            <div class="d-flex flex-wrap align-items-start mb-3">#{{ $cars->kode_mobil }} - <span class="badge text-bg-success fs-9 rounded-pill me-2 fw-semibold">{{ $cars->status }}</span></div>
                            <div class="d-flex flex-wrap align-items-center">
                              <h1 class="me-3">@currency($cars->tarif) / 24 hours</h1>
                              <p class="text-warning fw-bolder fs-6 mb-0">10% off</p>
                            </div>
                            <p class="mb-2 text-body-secondary"><strong class="text-body-highlight">{{ $cars->keterangan }}</p><p>{{ $cars->spesifikasi }}</p>
                          </div>
                          <div>
                            <div class="row g-3 g-sm-5 align-items-end">
                              <div class="col-12 col-sm-auto">
                                <p class="fw-semibold mb-2 text-body">Size : </p>
                                <div class="d-flex align-items-center"><select class="form-select w-auto">
                                    <option value="44">44</option>
                                    <option value="22">22</option>
                                    <option value="18">18</option>
                                  </select><a class="ms-2 fs-9 fw-semibold" href="#!">Size chart</a></div>
                              </div>
                              <div class="col-12 col-sm">
                                <p class="fw-semibold mb-2 text-body">Quantity : </p>
                                <div class="d-flex justify-content-between align-items-end">
                                  <div class="d-flex flex-between-center" data-quantity="data-quantity"><button class="btn btn-phoenix-primary px-3" data-type="minus"><span class="fas fa-minus"></span></button><input class="form-control text-center input-spin-none bg-transparent border-0 outline-none" style="width:50px;" type="number" min="1" value="2" /><button class="btn btn-phoenix-primary px-3" data-type="plus"><span class="fas fa-plus"></span></button></div><button class="btn btn-phoenix-primary px-3 border-0"><span class="fas fa-share-alt fs-7"></span></button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- end of .container-->
                </section><!-- <section> close ============================-->
                <!-- ============================================-->



                <!-- ============================================-->
                <!-- <section> begin ============================-->
                <section class="py-0">
                  <div class="container-small">
                    <ul class="nav nav-underline fs-9 mb-4" id="productTab" role="tablist">
                      <li class="nav-item"><a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#tab-description" role="tab" aria-controls="tab-description" aria-selected="true">Description</a></li>
                      <li class="nav-item"><a class="nav-link" id="specification-tab" data-bs-toggle="tab" href="#tab-specification" role="tab" aria-controls="tab-specification" aria-selected="false">Specification</a></li>
                      <li class="nav-item"><a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#tab-reviews" role="tab" aria-controls="tab-reviews" aria-selected="false">Ratings &amp; reviews</a></li>
                    </ul>
                    <div class="row gx-3 gy-7">
                      <div class="col-12 col-lg-7 col-xl-8">
                        <div class="tab-content" id="productTabContent">
                          <div class="tab-pane pe-lg-6 pe-xl-12 fade show active text-body-emphasis" id="tab-description" role="tabpanel" aria-labelledby="description-tab">
                            <p class="mb-5">CUPERTINO, CA , The M1 CPU allows Apple to deliver an all-new iMac with a lot more compact and impressively thin design. The new iMac delivers tremendous performance in an 11.5-millimeter-thin design with a stunning side profile that almost vanishes. iMac includes a 24-inch 4.5K Retina display with 11.3 million pixels, 500 nits of brightness, and over a billion colors, giving a beautiful and vivid viewing experience. It is available in a variety of striking colors to match a user's own style and brighten any area. A 1080p FaceTime HD camera, studio-quality mics, and a six-speaker sound system are all included in the new iMac, making it the greatest camera and audio system ever in a Mac. Touch ID is also making its debut on the iMac, making it easier than ever to securely log in, make Apple Pay transactions, and switch user accounts with the touch of a finger. Apps launch at lightning speed, everyday chores seem astonishingly fast and fluid, and demanding workloads like editing 4K video and working with large photos are faster than ever before thanks to the power and performance of M1 and macOS Big Sur.</p><a href="../../../assets/img/products/23.png" data-gallery="gallery-description"><img class="img-fluid mb-5 rounded-3" src="../../../assets/img/products/23.png" alt=""></a>
                            <p class="mb-0">The new iMac joins Apple's fantastic M1-powered Mac family, which includes the MacBook Air, 13-inch MacBook Pro, and Mac mini, and represents yet another step ahead in the company's shift to Apple silicon. Customers may order iMac starting Friday, April 30. It's the most personal, powerful, capable, and enjoyable it's ever been. In the second half of May, the iMac will be available."M1 is a huge step forward for the Mac," said Greg Joswiak, Apple's senior vice president of Worldwide Marketing. "Today, we're delighted to present the all-new iMac, the first Mac developed around the groundbreaking M1 processor." "The new iMac takes everything people love about iMac to an entirely new level, with its beautiful design in seven breathtaking colors, its immersive 4.5K Retina display, the greatest camera, mics, and speakers ever in a Mac, and Touch ID, combined with M1's incredible performance and macOS Big Sur's power."</p>
                          </div>
                          <div class="tab-pane pe-lg-6 pe-xl-12 fade" id="tab-specification" role="tabpanel" aria-labelledby="specification-tab">
                            <h3 class="mb-0 ms-4 fw-bold">Processor/Chipset</h3>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th style="width: 40%"> </th>
                                  <th style="width: 60%"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Chip name</h6>
                                  </td>
                                  <td class="px-5 mb-0">Apple M1 chip</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Cpu core</h6>
                                  </td>
                                  <td class="px-5 mb-0">8 (4 performance and 4 efficiency)</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Gpu core</h6>
                                  </td>
                                  <td class="px-5 mb-0">7</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Neural engine</h6>
                                  </td>
                                  <td class="px-5 mb-0">16 cores</td>
                                </tr>
                              </tbody>
                            </table>
                            <h3 class="mb-0 mt-6 ms-4 fw-bold">Storage</h3>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th style="width: 40%"></th>
                                  <th style="width: 60%"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Memory</h6>
                                  </td>
                                  <td class="px-5 mb-0">8 GB unified</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">SSD</h6>
                                  </td>
                                  <td class="px-5 mb-0">256 GB</td>
                                </tr>
                              </tbody>
                            </table>
                            <h3 class="mb-0 mt-6 ms-4 fw-bold">Display</h3>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th style="width: 40%"> </th>
                                  <th style="width: 60%"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Display type</h6>
                                  </td>
                                  <td class="px-5 mb-0">Retina</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Size</h6>
                                  </td>
                                  <td class="px-5 mb-0">24” (actual diagonal 23.5”)</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Resolution</h6>
                                  </td>
                                  <td class="px-5 mb-0">4480 x 2520 </td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Brightness</h6>
                                  </td>
                                  <td class="px-5 mb-0">500 nits</td>
                                </tr>
                              </tbody>
                            </table>
                            <h3 class="mb-0 mt-6 ms-4 fw-bold">Additional Specifications</h3>
                            <table class="table">
                              <thead>
                                <tr>
                                  <th style="width: 40%"> </th>
                                  <th style="width: 60%"></th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Camera</h6>
                                  </td>
                                  <td class="px-5 mb-0">1080p FaceTime HD camera</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight">
                                    <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Video </h6>
                                  </td>
                                  <td class="px-5 mb-0">Full native resolution on built-in display at 1 billion colors; <br>One external display with up to 6K resolution at 60Hz</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight">
                                    <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Audio</h6>
                                  </td>
                                  <td class="px-5 mb-0">High-fidelity six-speaker with force-cancelling woofers <br>Wide stereo sound <br>Spatial audio with Dolby Atmos3<br>Studio-quality three-mic array with directional beamforming</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight">
                                    <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Inputs </h6>
                                  </td>
                                  <td class="px-5 mb-0">Magic Keyboard<br>Magic Mouse</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight">
                                    <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Wireless </h6>
                                  </td>
                                  <td class="px-5 mb-0">802.11ax Wi-Fi 6 (IEEE 802.11a/b/g/n/ac compatible)<br>Bluetooth 5.0 wireless technology</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight">
                                    <h6 class="mb-0 mt-1 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">I/O &amp; expantions </h6>
                                  </td>
                                  <td class="px-5 mb-0">Thunderbolt / USB 4 ports x 2<br>3.5 mm headphone jack<br>Gigabit Ethernet<br>USB 3 ports x2</td>
                                </tr>
                                <tr>
                                  <td class="bg-body-highlight align-middle">
                                    <h6 class="mb-0 text-body text-uppercase fw-bolder px-4 fs-9 lh-sm">Operating System</h6>
                                  </td>
                                  <td class="px-5 mb-0">macOS Monterey </td>
                                </tr>
                              </tbody>
                            </table>
                            <h3 class="mb-3 mt-6 ms-4 fw-bold">In The Box</h3>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">iMac 24”</p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">Magic Keyboard </p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">Magic Mouse</p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">143W power adapter</p>
                            <p class="lh-sm border-top border-translucent mb-0 py-3 px-4">2m Power Cord</p>
                            <p class="lh-sm border-y border-translucent mb-0 py-3 px-4">USB-C to Lightning Cable</p>
                          </div>
                          <div class="tab-pane fade" id="tab-reviews" role="tabpanel" aria-labelledby="reviews-tab">
                            <div class="bg-body-emphasis rounded-3 p-4 border border-translucent">
                              <div class="row g-3 justify-content-between mb-4">
                                <div class="col-auto">
                                  <div class="d-flex align-items-center flex-wrap">
                                    <h2 class="fw-bolder me-3">4.9<span class="fs-8 text-body-quaternary fw-bold">/5</span></h2>
                                    <div class="me-3"><span class="fa fa-star text-warning fs-6"></span><span class="fa fa-star text-warning fs-6"></span><span class="fa fa-star text-warning fs-6"></span><span class="fa fa-star text-warning fs-6"></span><span class="fa fa-star-half-alt star-icon text-warning fs-6"></span></div>
                                    <p class="text-body mb-0 fw-semibold fs-7">6548 ratings and 567 reviews</p>
                                  </div>
                                </div>
                                <div class="col-auto"><button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#reviewModal">Rate this product</button>
                                  <div class="modal fade" id="reviewModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content p-4">
                                        <div class="d-flex flex-between-center mb-2">
                                          <h5 class="modal-title fs-8 mb-0">Your rating</h5><button class="btn p-0 fs-10">Clear</button>
                                        </div>
                                        <div class="mb-3" data-rater='{"starSize":32,"step":0.5}'></div>
                                        <div class="mb-3">
                                          <h5 class="text-body-highlight mb-3">Your review</h5><textarea class="form-control" id="reviewTextarea" rows="5" placeholder="Write your review"> </textarea>
                                        </div>
                                        <div class="dropzone dropzone-multiple p-0 mb-3" id="my-awesome-dropzone" data-dropzone>
                                          <div class="fallback"><input name="file" type="file" multiple></div>
                                          <div class="dz-preview d-flex flex-wrap">
                                            <div class="border border-translucent bg-body-emphasis rounded-3 d-flex flex-center position-relative me-2 mb-2" style="height:80px;width:80px;"><img class="dz-image" src="../../../assets/img/products/23.png" alt="..." data-dz-thumbnail><a class="dz-remove text-body-quaternary" href="#!" data-dz-remove><span data-feather="x"></span></a></div>
                                          </div>
                                          <div class="dz-message text-body-tertiary text-opacity-85 fw-bold fs-9 p-4" data-dz-message> Drag your photo here <span class="text-body-secondary">or </span><button class="btn btn-link p-0">Browse from device </button><br><img class="mt-3 me-2" src="../../../assets/img/icons/image-icon.png" width="24" alt=""></div>
                                        </div>
                                        <div class="d-sm-flex flex-between-center">
                                          <div class="form-check flex-1"><input class="form-check-input" id="reviewAnonymously" type="checkbox" value="" checked=""><label class="form-check-label mb-0 text-body-emphasis fw-semibold" for="reviewAnonymously">Review anonymously</label></div><button class="btn ps-0" data-bs-dismiss="modal">Close</button><button class="btn btn-primary rounded-pill">Submit</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                <div class="d-flex justify-content-between">
                                  <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-secondary ms-1"> by</span> Zingko Kudobum</h5>
                                  <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                    </div>
                                  </div>
                                </div>
                                <p class="text-body-tertiary fs-9 mb-1">35 mins ago</p>
                                <p class="text-body-highlight mb-3">100% satisfied</p>
                                <div class="row g-2 mb-2">
                                  <div class="col-auto"><a href="../../../assets/img/e-commerce/review-11.jpg" data-gallery="gallery-0"><img src="../../../assets/img/e-commerce/review-11.jpg" alt="" height="164" /></a></div>
                                  <div class="col-auto"><a href="../../../assets/img/e-commerce/review-12.jpg" data-gallery="gallery-0"><img src="../../../assets/img/e-commerce/review-12.jpg" alt="" height="164" /></a></div>
                                  <div class="col-auto"><a href="../../../assets/img/e-commerce/review-13.jpg" data-gallery="gallery-0"><img src="../../../assets/img/e-commerce/review-13.jpg" alt="" height="164" /></a></div>
                                </div>
                                <div class="d-flex"><span class="fas fa-reply fa-rotate-180 me-2"></span>
                                  <div>
                                    <h5>Respond from store<span class="text-body-tertiary fs-9 ms-2">5 mins ago</span></h5>
                                    <p class="text-body-highlight mb-0">Thank you for your valuable feedback</p>
                                  </div>
                                </div>
                                <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                              </div>
                              <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                <div class="d-flex justify-content-between">
                                  <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa-regular fa-star text-warning-light"></span><span class="text-body-secondary ms-1"> by</span> Piere Auguste Renoir</h5>
                                  <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                    </div>
                                  </div>
                                </div>
                                <p class="text-body-tertiary fs-9 mb-1">23 Oct, 12:09 PM</p>
                                <p class="text-body-highlight mb-1">Since the spring loaded event, I've been wanting an iMac, and it's exceeded my expectations. The screen is clear, the colors are vibrant (I got the blue one! ), and the performance is more than adequate for my needs as a college student. That's how good it is.</p>
                                <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                              </div>
                              <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                <div class="d-flex justify-content-between">
                                  <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star-half-alt star-icon text-warning"></span><span class="fa-regular fa-star text-warning-light"></span><span class="text-body-secondary ms-1"> by</span> Abel Kablmann </h5>
                                  <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                    </div>
                                  </div>
                                </div>
                                <p class="text-body-tertiary fs-9 mb-1">21 Oct, 12:00 PM</p>
                                <p class="text-body-highlight mb-1">Over the years, I've preferred Apple products. My job has allowed me to use Windows products on laptops and PCs. I've owned Windows laptops and desktops for home use in the past and will never use them again.</p>
                                <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                              </div>
                              <div class="mb-4 hover-actions-trigger btn-reveal-trigger">
                                <div class="d-flex justify-content-between">
                                  <h5 class="mb-2"><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="fa fa-star text-warning"></span><span class="text-body-secondary ms-1"> by</span> Pennywise Alfred</h5>
                                  <div class="btn-reveal-trigger position-static"><button class="btn btn-sm dropdown-toggle dropdown-caret-none transition-none btn-reveal" type="button" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="fas fa-ellipsis-h fs-10"></span></button>
                                    <div class="dropdown-menu dropdown-menu-end py-2"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                                    </div>
                                  </div>
                                </div>
                                <p class="text-body-tertiary fs-9 mb-1">35 mins ago</p>
                                <p class="text-body-highlight mb-3">Nice and beautiful product.</p>
                                <div class="row g-2 mb-2">
                                  <div class="col-auto"><a href="../../../assets/img/e-commerce/review-14.jpg" data-gallery="gallery-3"><img src="../../../assets/img/e-commerce/review-14.jpg" alt="" height="164" /></a></div>
                                  <div class="col-auto"><a href="../../../assets/img/e-commerce/review-15.jpg" data-gallery="gallery-3"><img src="../../../assets/img/e-commerce/review-15.jpg" alt="" height="164" /></a></div>
                                  <div class="col-auto"><a href="../../../assets/img/e-commerce/review-16.jpg" data-gallery="gallery-3"><img src="../../../assets/img/e-commerce/review-16.jpg" alt="" height="164" /></a></div>
                                </div>
                                <div class="hover-actions top-0"><button class="btn btn-sm btn-phoenix-secondary me-2"><span class="fas fa-thumbs-up"></span></button><button class="btn btn-sm btn-phoenix-secondary me-1"><span class="fas fa-thumbs-down"></span></button></div>
                              </div>
                              <div class="d-flex justify-content-center">
                                <nav>
                                  <ul class="pagination mb-0">
                                    <li class="page-item"><a class="page-link" href="#!"><span class="fas fa-chevron-left"> </span></a></li>
                                    <li class="page-item"><a class="page-link" href="#!">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                    <li class="page-item active"><a class="page-link" href="#!">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#!">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#!"><span class="fas fa-chevron-right"></span></a></li>
                                  </ul>
                                </nav>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 col-lg-5 col-xl-4">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="text-body-emphasis">Usually Bought Together</h5>
                            <div class="w-75">
                              <p class="text-body-tertiary fs-9 fw-bold line-clamp-1">with 24" iMac® with Retina 4.5K display - Apple M1 8GB Memory - 256GB SSD - w/Touch ID (Latest Model) - Blue</p>
                            </div>
                            <div class="border-dashed border-y border-translucent py-4">
                              <div class="d-flex align-items-center mb-5">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" checked="checked" /><label class="form-check-label"></label></div><a href="../../../apps/e-commerce/landing/product-details.html"> <img class="border border-translucent rounded" src="../../../assets/img/products/2.png" width="53" alt="" /></a>
                                <div class="ms-2"><a class="fs-9 fw-bold line-clamp-2 mb-2" href="../../../apps/e-commerce/landing/product-details.html"> iPhone 13 pro max-Pacific Blue- 128GB</a>
                                  <h5>$899.99</h5>
                                </div>
                              </div>
                              <div class="d-flex align-items-center mb-5">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" checked="checked" /><label class="form-check-label"></label></div><a href="../../../apps/e-commerce/landing/product-details.html"> <img class="border border-translucent rounded" src="../../../assets/img/products/16.png" width="53" alt="" /></a>
                                <div class="ms-2"><a class="fs-9 fw-bold line-clamp-2 mb-2" href="../../../apps/e-commerce/landing/product-details.html">Apple AirPods Pro</a>
                                  <h5>$59.00</h5>
                                </div>
                              </div>
                              <div class="d-flex align-items-center mb-0">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox" /><label class="form-check-label"></label></div><a href="../../../apps/e-commerce/landing/product-details.html"> <img class="border border-translucent rounded" src="../../../assets/img/products/10.png" width="53" alt="" /></a>
                                <div class="ms-2"><a class="fs-9 fw-bold line-clamp-2 mb-2" href="../../../apps/e-commerce/landing/product-details.html">Apple Magic Mouse (Wireless, Rechargable) - Silver, Worst mouse ever</a>
                                  <h5>$89.00</h5>
                                </div>
                              </div>
                            </div>
                            <div class="d-flex align-items-end justify-content-between pt-3">
                              <div>
                                <h5 class="mb-2 text-body-tertiary text-opacity-85">Total</h5>
                                <h4 class="mb-0 text-body-emphasis">$958.99</h4>
                              </div>
                              <div class="btn btn-outline-warning">Add 3 items to cart<span class="fas fa-shopping-cart ms-2"></span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div><!-- end of .container-->
                </section><!-- <section> close ============================-->
                <!-- ============================================-->

              </div>

              <!-- ============================================-->
              <!-- <section> begin ============================-->
              <section class="py-0 mb-9">
                <div class="container">
                  <div class="d-flex flex-between-center mb-3">
                    <div>
                      <h3>Similar Products</h3>
                      <p class="mb-0 text-body-tertiary fw-semibold">Essential for a better life</p>
                    </div><button class="btn btn-sm btn-phoenix-primary">View all</button>
                  </div>
                  <div class="row g-3 mb-6">
                    @foreach ($cardata as $car )
                    <div class="col-sm-6 col-lg-4 col-xl-3">
                        <div class="hover-actions-trigger mx-auto rounded-3 overflow-hidden">
                            <img class="img my-10" width="350" height="250" src="../{{ $car->foto_mobil }}" alt="" />
                            <div class="hover-actions top-0 end-0 mt-4 me-4 z-5">
                                <button class="btn btn-wish">
                                    <span class="far fa-heart" style="color: red" data-fa-transform="down-1">
                                        </span>
                                    </button>
                                </div>
                            <div class="backdrop-faded backdrop-secondary-dark h-100 d-flex flex-column justify-content-end" style="opacity: 70%">
                                <a class="stretched-link fs-7 text-white fw-bold" href="#!">{{ $car->merk }} | {{ $car->model }}</a>
                                <p class="mb-2 text-secondary-lighter"><span class="fa-solid fa-map-marker-alt me-2"></span>{{ $car->kota }}, Indonesia</p>
                                <div class="d-flex align-items-center gap-3"><span class="badge badge-phoenix badge-phoenix-warning fs-8 fw-normal"><span class="fa-solid fa-star me-1 fs-9" data-fa-transform="up-1"></span><span class="badge-label">4.8</span></span>
                                    <h4 class="mb-0 text-white fw-bold text-nowrap">@currency($car->tarif) <span class="text-secondary-lighter fs-8 fw-normal">/
                                            24 hours</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                </div><!-- end of .container-->
              </section><!-- <section> close ============================-->
              <!-- ============================================-->




            @if (Auth::user())
            <!-- ===============================================-->
            <!--                 Support Chat                   -->
            <!-- ===============================================-->

            @include('Component.support')
            @endif


        </div>

        <!-- ===============================================-->
        <!--                 About                         -->
        <!-- ===============================================-->

        @include('Component.about')


        <!-- ===============================================-->
        <!--                 Footer                         -->
        <!-- ===============================================-->

        @include('Component.footer')

    </main>

    <!-- ===============================================-->
    <!--               Customize WebApps                -->
    <!-- ===============================================-->


    @include('Component.customize')


    <!-- ===============================================-->
    <!--                   JavaScripts                  -->
    <!-- ===============================================-->

    @include('Component.assets.js')

</body>

</html>
