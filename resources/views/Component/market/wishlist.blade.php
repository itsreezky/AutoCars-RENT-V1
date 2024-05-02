<section class="pt-5 pb-9">
    <div class="container-small cart">
        <nav class="mb-4" aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{route('market')}}">Market</a></li>
                <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
        </nav>
        <h2 class="mb-5">Wishlists</h2>
        <div id="wishlist" data-list='{"valueNames":["carsid","merk","model","tarif","action"],"page":5,"pagination":true,"filter":{"key":"carsid"}}'>
            <div class="table-responsive">
              <table class="table table-sm fs-9 mb-0">
                <thead>
                  <tr class="bg-body-highlight">
                    <th class="sort border-top border-translucent ps-3" data-sort="foto">Foto Mobil</th>
                    <th class="sort border-top border-translucent" data-sort="carsid">Kode Mobil</th>
                    <th class="sort border-top border-translucent" data-sort="owner">Pemilik</th>
                    <th class="sort border-top border-translucent" data-sort="merk">Merk</th>
                    <th class="sort border-top border-translucent" data-sort="model">Model</th>
                    <th class="sort border-top border-translucent" data-sort="tarif">Tarif</th>
                    <th class="sort border-top border-translucent text-end pe-3" data-sort="action">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                @foreach ($wishlist as $wish )
                  <tr>
                    <td class="align-middle ps-3 foto"><img src="{{ $wish->foto_mobil }}" width="100" height="100"></td>
                    <td class="align-middle carsid">#{{ $wish->kode_mobil }}</td>
                    <td class="align-middle owner">{{ $wish->owner }}</td>
                    <td class="align-middle merk">{{ $wish->merk }}</td>
                    <td class="align-middle model">{{ $wish->model }}</td>
                    <td class="align-middle tarif">@currency($wish->tarif)</td>
                    <td class="align-middle action text-end py-3 pe-3">
                    <form action="{{ route('delWishlist', $wish->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-sm btn-outline-danger me-2 mb-2" type="submit">
                                    <span class="fas fa-trash"></span>
                                    Unwishlist</button>
                                </form>

                                    <button class="btn btn-primary fs-10">
                                    <span class="fas fa-shopping-cart me-1 fs-10"></span>
                                    Add to cart</button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <div class="d-flex justify-content-center mt-3"><button class="page-link" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
              <ul class="mb-0 pagination"></ul><button class="page-link pe-0" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
            </div>
          </div>
    </div>
</section>
