<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Data Keluarga (Page 2)</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">
            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="usia_ibu">Usia Ibu</label>
                <input type="number" id="usia_ibu" name="usia_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('usia_ibu', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pendidikan_ibu">Pendidikan Ibu</label>
                <input type="text" id="pendidikan_ibu" name="pendidikan_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pendidikan_ibu', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                <input type="number" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pekerjaan_ibu', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="penghasilan_ibu">Penghasilan Ibu</label>
                <input type="number" id="penghasilan_ibu" name="penghasilan_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('penghasilan_ibu', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="alamat_ibu">Alamat Ibu</label>
                <input type="text" id="alamat_ibu" name="alamat_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('alamat_ibu', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keterangan_ibu">Keterangan Ibu</label>
                <input type="text" id="keterangan_ibu" name="keterangan_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('keterangan_ibu', this.value)" />
            </div>

            <!-- FORM ANAK (DINAMIS) -->

            <div id="form-anak">
                <div>
                    <p style="font-weight: bold">Identitas Anak</p>
                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="nama_anak">Nama Anak</label>
                        <input type="text" id="nama_anak" name="nama_anak" class="form-control" />
                    </div>

                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="status_anak">Status Anak</label>
                        <input type="text" id="status_anak" name="status_anak" class="form-control" />
                    </div>

                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="usia_anak">Usia Anak</label>
                        <input type="text" id="usia_anak" name="usia_anak" class="form-control" />
                    </div>

                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="pendidikan_anak">Pendidikan Anak</label>
                        <input type="text" id="pendidikan_anak" name="pendidikan_anak" class="form-control" />
                    </div>

                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="pekerjaan_anak">Pekerjaan Anak</label>
                        <input type="text" id="pekerjaan_anak" name="pekerjaan_anak" class="form-control" />
                    </div>

                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="penghasilan_anak">Penghasilan Anak</label>
                        <input type="text" id="penghasilan_anak" name="penghasilan_anak" class="form-control" />
                    </div>

                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="alamat_anak">Alamat Anak</label>
                        <input type="text" id="alamat_anak" name="alamat_anak" class="form-control" />
                    </div>

                    <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                        <label class="form-label" for="keterangan_anak">Keterangan Anak</label>
                        <input type="text" id="keterangan_anak" name="keterangan_anak" class="form-control" />
                    </div>
                    {{-- <button type="button" class="btn btn-primary btn-block mb-4"
                        onclick="tempDatabase.handleAsesmenDetailDataKeluargaAnakN('anak_ke_n', getValueByName('anak_ke_1'))">Simpan
                        Data Anak ke-1</button> --}}
                </div>
            </div>
            {{-- <button type="button" id="tambah-anak" class="btn btn-primary btn-block mb-4 mt-5 float-end"
                onclick="handleTambahAnak()">Tambah
                Anak</button> --}}


            <!-- END FORM ANAK (DINAMIS)-->

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nama_terdekat">Nama Orang Terdekat</label>
                <input type="text" id="nama_terdekat" name="nama_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('nama_terdekat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_terdekat">Status Orang Terdekat</label>
                <input type="text" id="status_terdekat" name="status_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('status_terdekat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="usia_terdekat">Usia Orang Terdekat</label>
                <input type="number" id="usia_terdekat" name="usia_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('usia_terdekat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pendidikan_terdekat">Pendidikan Orang Terdekat</label>
                <input type="text" id="pendidikan_terdekat" name="pendidikan_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pendidikan_terdekat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pekerjaan_terdekat">Pekerjaan Orang Terdekat</label>
                <input type="text" id="pekerjaan_terdekat" name="pekerjaan_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pekerjaan_terdekat', this.value)" />
            </div>


            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="penghasilan_terdekat">Penghasilan Orang Terdekat</label>
                <input type="number" id="penghasilan_terdekat" name="penghasilan_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('penghasilan_terdekat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="alamat_terdekat">Alamat Orang Terdekat</label>
                <input type="text" id="alamat_terdekat" name="alamat_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('alamat_terdekat', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keterangan_terdekat">Keterangan Orang Terdekat</label>
                <input type="text" id="keterangan_terdekat" name="keterangan_terdekat" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('keterangan_terdekat', this.value)" />
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
