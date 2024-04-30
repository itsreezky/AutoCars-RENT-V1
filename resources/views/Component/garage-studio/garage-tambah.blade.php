<div class="modal fade" id="tambahmobil" tabindex="-1" aria-labelledby="tambahmobil" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="card bg-gray-200 shadow border-0 mb-0">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1 text-center py-4">
                            <h4 class="font-weight-bolder text-white mt-1 mb-0">NEW CAR</h4>
                            <p class="mb-1 text-sm text-white">Please Add Your Car Data Carefully</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('garage.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="card-body">

                            <div class="input-group input-group-static mb-4">
                                <input id="owner_id" type="hidden" class="form-control" value="{{ (Auth::user()->owner_id) }}"
                                    name="owner_id" readonly>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="merk">Merk Mobil</label>
                                <input id="merk" type="text" class="form-control" name="merk">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="model">Model Mobil</label>
                                <input id="model" type="text" class="form-control" name="model">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="plat">Plat Mobil</label>
                                <input id="plat" type="text" class="form-control" name="plat">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="tarif">Transmisi</label>
                                <select
                                                                    class="form-select" name="transmisi" id="transmisi"
                                                                    required="required">
                                                                    <option value="Manual">Manual</option>
                                                                    <option value="Otomatis">Otomatis</option>
                                                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="tarif">Seat</label>
                                <select
                                                                    class="form-select" name="seat" id="seat"
                                                                    required="required">
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>

                                                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="tarif">Bahan Bakar</label>
                                <select
                                                                    class="form-select" name="bahan_bakar" id="bahan_bakar"
                                                                    required="required">
                                                                    <option value="Pertalite">Pertalite</option>
                                                                    <option value="Pertamax">Pertamax</option>
                                                                    <option value="Pertamax TURBO">Pertamax TURBO</option>
                                                                    <option value="Solar">Solar</option>

                                                                </select>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="keterangan">Keterangan Mobil</label>
                                <textarea id="keterangan" rows="4" cols="50" type="text" class="form-control" name="keterangan"></textarea>
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <label for="tarif">Tarif / Hari</label>
                                <input id="tarif" type="number" class="form-control" name="tarif">
                            </div>

                            <div class="input-group input-group-static mb-4">
                                <label for="foto_mobil">Foto Mobil</label>
                                <input id="foto_mobil" type="file" class="form-control" name="foto_mobil">
                            </div>
                            <div class="input-group input-group-static mb-4">
                                <input id="status" type="hidden" value="Available" class="form-control" name="status" readonly>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit"
                                    class="form-control btn bg-gradient-dark mt-4 mb-0">Tambah</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
