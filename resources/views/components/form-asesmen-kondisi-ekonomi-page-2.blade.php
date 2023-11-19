<div class="col-sm-12 col-xl-12 swiper-slide" style="width: 100%;">
    <div class="bg-light rounded h-100 p-4 col-sm-12 col-md-12 col-xl-12">
        <h6 class="mb-4">Asesmen Kondisi Ekonomi (Page 2)</h6>

        <!-- 2 column grid layout with text inputs for the first and last names -->
        <!-- Text input -->
        <div class="row">

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jenis_pekerjaan_kepala_keluarga">Jenis Pekerjaan Kepala
                    Keluarga</label>
                <input type="text" id="jenis_pekerjaan_kepala_keluarga" name="jenis_pekerjaan_kepala_keluarga"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('jenis_pekerjaan_kepala_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="deskripsi_pekerjaan_kepala_keluarga">Deskripsi Pekerjaan Kepala
                    Keluarga</label>
                <input type="text" id="deskripsi_pekerjaan_kepala_keluarga"
                    name="deskripsi_pekerjaan_kepala_keluarga" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('deskripsi_pekerjaan_kepala_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_pekerjaan_kepala_keluarga">Status Pekerjaan Kepala
                    Keluarga</label>
                <input type="text" id="status_pekerjaan_kepala_keluarga" name="status_pekerjaan_kepala_keluarga"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('status_pekerjaan_kepala_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jumlah_tanggungan_keluarga">Jumlah Tanggungan Keluarga</label>
                <input type="text" id="jumlah_tanggungan_keluarga" name="jumlah_tanggungan_keluarga"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('jumlah_tanggungan_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_penghasilan_kepala_keluarga">Status Penghasilan Kepala
                    Keluarga</label>
                <input type="text" id="status_penghasilan_kepala_keluarga" name="status_penghasilan_kepala_keluarga"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('status_penghasilan_kepala_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="besaran_penghasilan_kepala_keluarga">Besaran Penghasilan Kepala
                    Keluarga</label>
                <input type="text" id="besaran_penghasilan_kepala_keluarga"
                    name="besaran_penghasilan_kepala_keluarga" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('besaran_penghasilan_kepala_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pencari_nafkah_keluarga">Pencari Nafkah Keluarga</label>
                <input type="text" id="pencari_nafkah_keluarga" name="pencari_nafkah_keluarga" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('pencari_nafkah_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="status_hutang_keluarga">Status Hutang Keluarga</label>
                <input type="text" id="status_hutang_keluarga" name="status_hutang_keluarga" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('status_hutang_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="besaran_hutang_keluarga">Besaran Hutang Keluarga</label>
                <input type="text" id="besaran_hutang_keluarga" name="besaran_hutang_keluarga" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('besaran_hutang_keluarga', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="sumber_perolehan_permakanan">Sumber Perolehan Permakanan</label>
                <input type="text" id="sumber_perolehan_permakanan" name="sumber_perolehan_permakanan"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('sumber_perolehan_permakanan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pernah_tidak_makan_seharian">Pernah Tidak Makan Seharian</label>
                <input type="text" id="pernah_tidak_makan_seharian" name="pernah_tidak_makan_seharian"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('pernah_tidak_makan_seharian', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="jumlah_makan_dalam_sehari">Jummlah Makan Dalam Hari</label>
                <input type="text" id="jumlah_makan_dalam_sehari" name="jumlah_makan_dalam_sehari"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('jumlah_makan_dalam_sehari', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pengeluaran_makan_dalam_sehari">Pengeluaran Makan Dalam
                    Sehari</label>
                <input type="text" id="pengeluaran_makan_dalam_sehari" name="pengeluaran_makan_dalam_sehari"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('pengeluaran_makan_dalam_sehari', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="pemenuhan_gizi">Pemenuhan Gizi</label>
                <input type="text" id="pemenuhan_gizi" name="pemenuhan_gizi" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('pemenuhan_gizi', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="penghasilan_cukup_makan">Penghasilan Cukup Makan</label>
                <input type="text" id="penghasilan_cukup_makan" name="penghasilan_cukup_makan"
                    class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('penghasilan_cukup_makan', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="perolehan_sandang">Perolehan Sandang</label>
                <input type="text" id="perolehan_sandang" name="perolehan_sandang" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('perolehan_sandang', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kemampuan_beli_baju">Kemampuan Beli Baju</label>
                <input type="text" id="kemampuan_beli_baju" name="kemampuan_beli_baju" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kemampuan_beli_baju', this.value)" />
            </div>

            <div style="text-align: left" class="form-outline mb-4 col-sm-12 col-md-12 col-xl-6">
                <label class="form-label" for="kepemilikan_hp">Kepemilikan HP</label>
                <input type="text" id="kepemilikan_hp" name="kepemilikan_hp" class="form-control"
                    oninput="tempDatabase.handleAsesmenKondisiEkonomi('kepemilikan_hp', this.value)" />
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
