<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Riwayat Bantuan</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_dtks">Status DTKS</label>
                <input type="text" id="status_dtks" name="status_dtks" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('status_dtks', this.value)" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="bantuan_sosial">Bantuan Sosial</label>
                <input type="text" id="bantuan_sosial" name="bantuan_sosial" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('bantuan_sosial', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="sejak_kapan">Sejak Kapan</label>
                <input type="text" id="sejak_kapan" name="sejak_kapan" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('sejak_kapan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keterangan_bantuan">Keterangan Bantuan</label>
                <input type="text" id="keterangan_bantuan" name="keterangan_bantuan" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('keterangan_bantuan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_bantuan">Status Bantuan</label>
                <input type="text" id="status_bantuan" name="status_bantuan" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('status_bantuan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="rehabilitasi_sosial">Rehabilitasi Sosial</label>
                <input type="text" id="rehabilitasi_sosial" name="rehabilitasi_sosial" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('rehabilitasi_sosial', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="lokasi_rehabilitasi_sosial">Lokasi Rehabilitasi Sosial</label>
                <input type="text" id="lokasi_rehabilitasi_sosial" name="lokasi_rehabilitasi_sosial"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('lokasi_rehabilitasi_sosial', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="tahun">Tahun</label>
                <input type="text" id="tahun" name="tahun" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('tahun', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="riwayat_pelatihan">Riwayat Pelatihan</label>
                <input type="text" id="riwayat_pelatihan" name="riwayat_pelatihan" class="form-control"
                    oninput="tempDatabase.handleAsesmenRiwayatBantuan('riwayat_pelatihan', this.value)" />
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
