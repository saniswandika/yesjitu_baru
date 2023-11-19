<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Diagnosa Layanan Intervensi</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">
            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="permasalahan_saat_ini">Permasalahan Saat Ini</label>
                <textarea class="form-control" id="permasalahan_saat_ini" rows="4" name="permasalahan_saat_ini"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('permasalahan_saat_ini', this.value)"></textarea>
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kebutuhan_ppks">Kebutuhan PPKS</label>
                <input type="text" id="kebutuhan_ppks" name="kebutuhan_ppks" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('kebutuhan_ppks', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="bentuk_rehabsos">Bentuk Rehabsos</label>
                <textarea class="form-control" id="bentuk_rehabsos" rows="4" name="bentuk_rehabsos"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('bentuk_rehabsos', this.value)"></textarea>
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="opd_terkait_dilibatkan">OPD Terkait Dilibatkan</label>
                <textarea class="form-control" id="opd_terkait_dilibatkan" rows="4" name="opd_terkait_dilibatkan"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('opd_terkait_dilibatkan', this.value)"></textarea>
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="opd_terkait_program">OPD Terkait Program</label>
                <textarea class="form-control" id="opd_terkait_program" rows="4" name="opd_terkait_program"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('opd_terkait_program', this.value)"></textarea>
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="program_dinsos">Program Dinsos</label>
                <textarea class="form-control" id="program_dinsos" rows="4" name="program_dinsos"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('program_dinsos', this.value)"></textarea>
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="foto_ppks">Foto PPKS</label>
                <input type="file" id="foto_ppks" name="foto_ppks" class="form-control" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="foto_ktp_ppks">Foto KTP PPKS</label>
                <input type="file" id="foto_ktp_ppks" name="foto_ktp_ppks" class="form-control" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="foto_rumah_tampak_depan">Foto Rumah Tampak Depan</label>
                <input type="file" id="foto_rumah_tampak_depan" name="foto_rumah_tampak_depan"
                    class="form-control" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="foto_rumah_tampak_dalam">Foto Rumah Dalam Depan</label>
                <input type="file" id="foto_rumah_tampak_dalam" name="foto_rumah_tampak_dalam"
                    class="form-control" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="foto_home_visit">Foto Home Visit</label>
                <input type="file" id="foto_home_visit" name="foto_home_visit" class="form-control" />
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
        <button type="submit" class="btn btn-primary mb-4 mt-5 float-end">Submit</button>
    </div>
</div>
