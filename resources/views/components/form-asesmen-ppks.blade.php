<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen PPKS</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pekerja_sosial">Pekerja Sosial</label>
                <input type="text" id="pekerja_sosial" name="pekerja_sosial" class="form-control"
                    oninput="tempDatabase.handleAsesmenPPKS('pekerja_sosial', this.value)" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jenis_ppks_utama">Jenis PPKS Utama</label>
                <input type="text" id="jenis_ppks_utama" name="jenis_ppks_utama" class="form-control"
                    oninput="tempDatabase.handleAsesmenPPKS('jenis_ppks_utama', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_ppks">Status PPKS</label>
                <input type="text" id="status_ppks" name="status_ppks" class="form-control"
                    oninput="tempDatabase.handleAsesmenPPKS('status_ppks', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="tanggal_asesmen">Tanggal Asesmen</label>
                <input type="date" id="tanggal_asesmen" name="tanggal_asesmen" class="form-control"
                    oninput="tempDatabase.handleAsesmenPPKS('tanggal_asesmen', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jenis_ppks_lainnya">Jenis PPKS
                    Lainnya</label>
                <input type="text" id="jenis_ppks_lainnya" name="jenis_ppks_lainnya" class="form-control"
                    oninput="tempDatabase.handleAsesmenPPKS('jenis_ppks_lainnya', this.value)" />
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
