<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Aspek Akademis</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="mampu_baca">Mampu Baca</label>
                <input type="text" id="mampu_baca" name="mampu_baca" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('mampu_baca', this.value)" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="mampu_tulis">Mampu Tulis</label>
                <input type="text" id="mampu_tulis" name="mampu_tulis" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('mampu_tulis', this.value)" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="mampu_hitung">Mampu HItung</label>
                <input type="text" id="mampu_hitung" name="mampu_hitung" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('mampu_hitung', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pengalaman_kerja">Pengalaman Kerja</label>
                <input type="text" id="pengalaman_kerja" name="pengalaman_kerja" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('pengalaman_kerja', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="prestasi">Prestasi</label>
                <input type="text" id="prestasi" name="prestasi" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('prestasi', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="hobi">Hobi</label>
                <input type="text" id="hobi" name="hobi" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('hobi', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="minat">Minat</label>
                <input type="text" id="minat" name="minat" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('minat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="bakat">Bakat</label>
                <input type="text" id="bakat" name="bakat" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('bakat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keterampilan_mahir">Keterampilan Mahir</label>
                <input type="text" id="keterampilan_mahir" name="keterampilan_mahir" class="form-control"
                    oninput="tempDatabase.handleAsesmenAspekAkademis('keterampilan_mahir', this.value)" />
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
