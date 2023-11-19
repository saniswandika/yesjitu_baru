<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Kondisi Ekonomi (Page 1)</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="karakteristik_lingkungan">Karakteristik Lingkungan</label>
                <input type="text" id="karakteristik_lingkungan" name="karakteristik_lingkungan" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('karakteristik_lingkungan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="riwayat_pindah_domisili">Riwayat Pindah Domisili</label>
                <input type="text" id="riwayat_pindah_domisili" name="riwayat_pindah_domisili" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('riwayat_pindah_domisili', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kondisi_pemukiman">Kondisi Pemukiman</label>
                <input type="text" id="kondisi_pemukiman" name="kondisi_pemukiman" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kondisi_pemukiman', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_tempat_tinggal">Status Tempat Tinggal</label>
                <input type="text" id="status_tempat_tinggal" name="status_tempat_tinggal" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('status_tempat_tinggal', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_kepemilikan_tanah">Status Kepemilikan Tanah</label>
                <input type="text" id="status_kepemilikan_tanah" name="status_kepemilikan_tanah" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('status_kepemilikan_tanah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="luas_rumah">Luas Rumah</label>
                <input type="text" id="luas_rumah" name="luas_rumah" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('luas_rumah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="sudah_berapa_lama_tinggal">Sudah Berapa lama Tinggal</label>
                <input type="text" id="sudah_berapa_lama_tinggal" name="sudah_berapa_lama_tinggal"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('sudah_berapa_lama_tinggal', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="harga_sewa_rumah">Harga Sewa Rumah</label>
                <input type="text" id="harga_sewa_rumah" name="harga_sewa_rumah" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('harga_sewa_rumah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="apakah_rawan_bencana">Apakah Rawan Bencana</label>
                <input type="text" id="apakah_rawan_bencana" name="apakah_rawan_bencana" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('apakah_rawan_bencana', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kondisi_rumah">Kondisi Rumah</label>
                <input type="text" id="kondisi_rumah" name="kondisi_rumah" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kondisi_rumah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kondisi_bangunan">Kondisi Bangunan</label>
                <input type="text" id="kondisi_bangunan" name="kondisi_bangunan" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kondisi_bangunan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kondisi_dinding">Kondisi Dinding</label>
                <input type="text" id="kondisi_dinding" name="kondisi_dinding" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kondisi_dinding', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kondisi_lantai">Kondisi Lantai</label>
                <input type="text" id="kondisi_lantai" name="kondisi_lantai" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kondisi_lantai', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="fasilitas_mck">Fasilitas Jamban/MCK</label>
                <input type="text" id="fasilitas_mck" name="fasilitas_mck" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('fasilitas_mck', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="akses_listrik">Akses Listrik</label>
                <input type="text" id="akses_listrik" name="akses_listrik" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('akses_listrik', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="sumber_air">Sumber Air</label>
                <input type="text" id="sumber_air" name="sumber_air" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('sumber_air', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="ppks_kepala_keluarga">PPKS Kepala Keluarga</label>
                <input type="text" id="ppks_kepala_keluarga" name="ppks_kepala_keluarga" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('ppks_kepala_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kepala_keluarga_bekerja">Kepala Keluarga Bekerja</label>
                <input type="text" id="kepala_keluarga_bekerja" name="kepala_keluarga_bekerja"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kepala_keluarga_bekerja', this.value)" />
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
        {{-- <button type="submit" class="btn btn-primary btn-block mb-4 mt-5 float-end"
                onclick="handleSubmit(e)">Submit</button> --}}

    </div>
</div>
