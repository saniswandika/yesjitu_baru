<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Data Keluarga (Page 1)</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nama_pasangan">Nama Pasangan</label>
                <input type="text" id="nama_pasangan" name="nama_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('nama_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_pasangan">Status Pasangan</label>
                <input type="text" id="status_pasangan" name="status_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('status_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="usia_pasangan">Usia Pasangan</label>
                <input type="number" id="usia_pasangan" name="usia_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('usia_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pendidikan_pasangan">Pendidikan Pasangan</label>
                <input type="text" id="pendidikan_pasangan" name="pendidikan_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pendidikan_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pekerjaan_pasangan">Pekerjaan Pasangan</label>
                <input type="text" id="pekerjaan_pasangan" name="pekerjaan_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pekerjaan_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="penghasilan_pasangan">Penghasilan Pasangan</label>
                <input type="text" id="penghasilan_pasangan" name="penghasilan_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('penghasilan_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="alamat_pasangan">Alamat Pasangan</label>
                <input type="text" id="alamat_pasangan" name="alamat_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('alamat_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keterangan_pasangan">Keterangan Pasangan</label>
                <input type="text" id="keterangan_pasangan" name="keterangan_pasangan" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('keterangan_pasangan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nama_ayah">Nama Ayah</label>
                <input type="text" id="nama_ayah" name="nama_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('nama_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_ayah">Status Ayah</label>
                <input type="text" id="status_ayah" name="status_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('status_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="usia_ayah">Usia Ayah</label>
                <input type="number" id="usia_ayah" name="usia_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('usia_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pendidikan_ayah">Pendidikan Ayah</label>
                <input type="text" id="pendidikan_ayah" name="pendidikan_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pendidikan_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pekerjaan_ayah">Pekerjaan Ayah</label>
                <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('pekerjaan_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="penghasilan_ayah">Penghasilan Ayah</label>
                <input type="number" id="penghasilan_ayah" name="penghasilan_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('penghasilan_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="alamat_ayah">Alamat Ayah</label>
                <input type="text" id="alamat_ayah" name="alamat_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('alamat_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="keterangan_ayah">Keterangan Ayah</label>
                <input type="text" id="keterangan_ayah" name="keterangan_ayah" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('keterangan_ayah', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nama_ibu">Nama Ibu</label>
                <input type="text" id="nama_ibu" name="nama_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('nama_ibu', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_ibu">Status Ibu</label>
                <input type="text" id="status_ibu" name="status_ibu" class="form-control"
                    oninput="tempDatabase.handleAsesmenDataKeluarga('status_ibu', this.value)" />
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
