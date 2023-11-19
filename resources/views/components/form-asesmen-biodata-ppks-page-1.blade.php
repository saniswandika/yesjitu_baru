<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Biodata PPKS (Page 1)</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nama_lengkap">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama_lengkap" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('nama_lengkap', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nik">NIK</label>
                <input type="text" id="nik" name="nik" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('nik', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nama_ibu_kandung">Nama Ibu Kandung</label>
                <input type="text" id="nama_ibu_kandung" name="nama_ibu_kandung" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('nama_ibu_kandung', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jenis_kelamin">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin"
                    onchange="tempDatabase.handleAsesmenBiodataPPKS('jenis_kelamin', this.value)">
                    <option value="perempuan">Perempuan</option>
                    <option value="laki-laki">Laki-laki</option>
                </select>
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="tempat_lahir">Tempat Lahir</label>
                <input type="text" id="tempat_lahir" name="tempat_lahir" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('tempat_lahir', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="shdk_dalam_kk">SHDK Dalam KK</label>
                <input type="text" id="shdk_dalam_kk" name="shdk_dalam_kk" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('shdk_dalam_kk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pekerjaan">Pekerjaan</label>
                <input type="text" id="pekerjaan" name="pekerjaan" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('pekerjaan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nomor_kk">Nomor KK</label>
                <input type="text" id="nomor_kk" name="nomor_kk" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('nomor_kk', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="nomor_hp">Nomor HP</label>
                <input type="text" id="nomor_hp" name="nomor_hp" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('nomor_hp', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="suku_bangsa">Suku Bangsa</label>
                <input type="text" id="suku_bangsa" name="suku_bangsa" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('suku_bangsa', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="agama">Agama</label>
                <input type="text" id="agama" name="agama" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('agama', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="usia">Usia</label>
                <input type="number" id="usia" name="usia" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('usia', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="anak_ke">Anak Ke</label>
                <input type="number" id="anak_ke" name="anak_ke" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('anak_ke', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="bersaudara">Bersaudara</label>
                <input type="number" id="bersaudara" name="bersaudara" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('bersaudara', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_ktp">Status KTP</label>
                <input type="text" id="status_ktp" name="status_ktp" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('status_ktp', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="alamat_ktp">Alamat KTP</label>
                <input type="text" id="alamat_ktp" name="alamat_ktp" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('alamat_ktp', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="rt_ktp">RT KTP</label>
                <input type="text" id="rt_ktp" name="rt_ktp" class="form-control"
                    oninput="tempDatabase.handleAsesmenBiodataPPKS('rt_ktp', this.value)" />
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
