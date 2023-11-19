<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asesment_biodata_ppks', function (Blueprint $table) {
            $table->bigIncrements('id_asesmen_biodata');
            $table->integer('id_asesmen_ppks');
            $table->foreign('id_asesmen_ppks')->references('id')->on('asesment_ppks')->onDelete('cascade');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('nama_ibu_kandung');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('shdk_dalam_kk');
            $table->string('pekerjaan');
            $table->string('nomor_kk');
            $table->bigInteger('nomor_hp');
            $table->string('suku_bangsa');
            $table->string('agama');
            $table->integer('usia');
            $table->integer('anak_ke');
            $table->integer('bersaudara');
            $table->string('status_ktp');
            $table->string('alamat_ktp');
            $table->string('rt_ktp');
            $table->string('rw_ktp');
            $table->string('kelurahan_ktp');
            $table->string('kecamatan_ktp');
            $table->string('kota_ktp');
            $table->string('provinsi_ktp');
            $table->string('alamat_domisili');
            $table->string('rt_domisili');
            $table->string('rw_domisili');
            $table->string('kelurahan_domisili');
            $table->string('kecamatan_domisili');
            $table->string('kota_domisili');
            $table->string('provinsi_domisili');
            $table->string('status_perkawinan');
            $table->string('jumlah_anak');
            $table->string('keterangan_perkawinan');
            $table->string('perkawinan_ke');
            $table->string('tingkat_pendidikan');
            $table->string('tamat_tidak');
            $table->string('keterangan_pendidikan');
            $table->string('sekolah');
            $table->string('jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('asesment_biodata_ppks');
    }
};
