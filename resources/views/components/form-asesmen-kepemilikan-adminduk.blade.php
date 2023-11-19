<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Kepemilikan Penduduk / Kartu Identitas</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="ktp_adminduk">KTP</label>
                <input type="text" id="ktp_adminduk" name="ktp_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('ktp_adminduk', this.value)" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kk_adminduk">KK</label>
                <input type="text" id="kk_adminduk" name="kk_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('kk_adminduk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="akte_kelahiran_adminduk">Akte Kelahiran</label>
                <input type="text" id="akte_kelahiran_adminduk" name="akte_kelahiran_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('akte_kelahiran_adminduk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kia_adminduk">KIA</label>
                <input type="text" id="kia_adminduk" name="kia_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('kia_adminduk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="buku_nikah_adminduk">Buku Nikah</label>
                <input type="text" id="buku_nikah_adminduk" name="buku_nikah_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('buku_nikah_adminduk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="sim_adminduk">SIM</label>
                <input type="text" id="sim_adminduk" name="sim_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('sim_adminduk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kartu_bpjs_adminduk">Kartu BPJS</label>
                <input type="text" id="kartu_bpjs_adminduk" name="kartu_bpjs_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('kartu_bpjs_adminduk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="id_lainnya_adminduk">ID Lainnya</label>
                <input type="text" id="id_lainnya_adminduk" name="id_lainnya_adminduk" class="form-control"
                    oninput="tempDatabase.handleAsesmenKepemilikanAdminduk('id_lainnya_adminduk', this.value)" />
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
        {{-- <button type="submit" class="btn btn-primary btn-block mb-4 mt-5 float-end">Place order</button> --}}

    </div>
</div>
