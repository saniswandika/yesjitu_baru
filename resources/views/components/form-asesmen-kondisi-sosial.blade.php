<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Kondisi Sosial</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="bahasa_sehari_hari">Bahasa Sehari Hari</label>
                <input type="text" id="bahasa_sehari_hari" name="bahasa_sehari_hari" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('bahasa_sehari_hari', this.value)" />
            </div>

            <div style="text-align:
                        left"
                class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="indikasi_ketelantaran">Indikasi Ketelantaran</label>
                <input type="text" id="indikasi_ketelantaran" name="indikasi_ketelantaran" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('indikasi_ketelantaran', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="tinggal_bersama">Tinggal Bersama</label>
                <input type="text" id="tinggal_bersama" name="tinggal_bersama" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('tinggal_bersama', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kondisi_lingkungan">Kondisi Lingkungan</label>
                <input type="text" id="kondisi_lingkungan" name="kondisi_lingkungan" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('kondisi_lingkungan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jumlah_orang_di_rumah">Jumlah Orang Di Rumah</label>
                <input type="text" id="jumlah_orang_di_rumah" name="jumlah_orang_di_rumah" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('jumlah_orang_di_rumah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="sosialiasi">Sosialiasi</label>
                <input type="text" id="sosialiasi" name="sosialiasi" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('sosialiasi', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keberadaan_ortu">Keberadaan Ortu</label>
                <input type="text" id="keberadaan_ortu" name="keberadaan_ortu" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('keberadaan_ortu', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="penduduk_asli_pendatang">Penduduk Asli Pendatang</label>
                <input type="text" id="penduduk_asli_pendatang" name="penduduk_asli_pendatang" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('tahun', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="asal_daerah">Asal Daerah</label>
                <input type="text" id="asal_daerah" name="asal_daerah" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('asal_daerah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="riwayat_hukum">Riwayat Hukum</label>
                <input type="text" id="riwayat_hukum" name="riwayat_hukum" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiSosial('riwayat_hukum', this.value)" />
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
