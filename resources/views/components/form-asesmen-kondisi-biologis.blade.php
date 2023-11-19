<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Kondisi Biologis</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kondisi_fisik">Kondisi Fisik</label>
                <input type="text" id="kondisi_fisik" name="kondisi_fisik" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiBiologis('kondisi_fisik', this.value)" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="ragam_disabilitas">Ragam Disabilitas</label>
                <input type="text" id="ragam_disabilitas" name="ragam_disabilitas" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiBiologis('ragam_disabilitas', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="motorik_disabilitas">Motorik Disabilitas</label>
                <input type="text" id="motorik_disabilitas" name="motorik_disabilitas" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiBiologis('motorik_disabilitas', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jenis_disabilitas">Jenis Disabilitas</label>
                <input type="text" id="jenis_disabilitas" name="jenis_disabilitas" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiBiologis('jenis_disabilitas', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="riwayat_penyakit_berat">Riwayat Penyakit Berat</label>
                <input type="text" id="riwayat_penyakit_berat" name="riwayat_penyakit_berat" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiBiologis('riwayat_penyakit_berat', this.value)" />
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
