<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Kondisi Ekonomi (Page 2)</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kepemilikan_kendaraan_pribadi">Kepemilikan Kendaraan
                    Pribadi</label>
                <input type="text" id="kepemilikan_kendaraan_pribadi" name="kepemilikan_kendaraan_pribadi"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kepemilikan_kendaraan_pribadi', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kepemilikan_barang_berharga">Kepemilikan Barang Berharga</label>
                <input type="text" id="kepemilikan_barang_berharga" name="kepemilikan_barang_berharga"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kepemilikan_barang_berharga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jumlah_anak_bersekolah_smp">Jumlah Anak Bersekolah SD</label>
                <input type="text" id="jumlah_anak_bersekolah_sd" name="jumlah_anak_bersekolah_sd"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('jumlah_anak_bersekolah_sd', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jumlah_anak_bersekolah_smp">Jumlah Anak Bersekolah SMP</label>
                <input type="text" id="jumlah_anak_bersekolah_smp" name="jumlah_anak_bersekolah_smp"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('jumlah_anak_bersekolah_smp', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jumlah_anak_bersekolah_sma">Jumlah Anak Bersekolah SMA</label>
                <input type="text" id="jumlah_anak_bersekolah_sma" name="jumlah_anak_bersekolah_sma"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('jumlah_anak_bersekolah_sma', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jumlah_anak_bersekolah_perguruan_tinggi">Jumlah Anak Bersekolah
                    Perguruan Tinggi</label>
                <input type="text" id="jumlah_anak_bersekolah_perguruan_tinggi"
                    name="jumlah_anak_bersekolah_perguruan_tinggi" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('jumlah_anak_bersekolah_perguruan_tinggi', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="anak_pernah_dapat_beasiswa">Anak Pernah Dapat Beasiswa</label>
                <input type="text" id="anak_pernah_dapat_beasiswa" name="anak_pernah_dapat_beasiswa"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('anak_pernah_dapat_beasiswa', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="anak_putus_sekolah">Anak Putus Sekolah</label>
                <input type="text" id="anak_putus_sekolah" name="anak_putus_sekolah" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('anak_putus_sekolah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keterangan_anak_putus_sekolah">Keternagan Anak Putus Sekolah</label>
                <input type="text" id="keterangan_anak_putus_sekolah" name="keterangan_anak_putus_sekolah"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('keterangan_anak_putus_sekolah', this.value)" />
            </div>

            {{-- <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                    <label class="form-label" for="form6Example7">Additional information</label>
                    <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                </div> --}}
        </div>

        <!-- Checkbox -->
        {{-- <div class="form-check d-flex justify-content-center mb-4">
             <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
             <label class="form-check-label" for="form6Example8"> Create an account? </label>
           </div> --}}

        <!-- Submit button -->
        {{-- <button type="submit" class="btn btn-primary btn-block mb-4 mt-5 float-end" id="submit-btn">Submit</button> --}}

    </div>
</div>
