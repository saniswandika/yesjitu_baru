<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   /**
    * Run the migrations.
    */
   public function up(): void
   {
      Schema::create('asesmen_kondisi_ekonomis', function (Blueprint $table) {
         $table->id("id_asesmen_kondisi_ekonomi");
         $table->string("id_asesmen_ppks");
         $table->string("karakteristik_lingkungan");
         $table->string("riwayat_pindah_domisili");
         $table->string("kondisi_pemukiman");
         $table->string("status_tempat_tinggal");
         $table->string("status_kepemilikan_tanah");
         $table->string("luas_rumah");
         $table->string("sudah_berapa_lama_tinggal");
         $table->string("harga_sewa_rumah");
         $table->string("apakah_rawan_bencana");
         $table->string("kondisi_rumah");
         $table->string("kondisi_bangunan");
         $table->string("kondisi_dinding");
         $table->string("kondisi_lantai");
         $table->string("kondisi_atap");
         $table->string("fasilitas_mck");
         $table->string("akses_listrik");
         $table->string("sumber_air");
         $table->string("ppks_kepala_keluarga");
         $table->string("kepala_keluarga_bekerja");
         $table->string("jenis_pekerjaan_kepala_keluarga");
         $table->string("deskripsi_pekerjaan_kepala_keluarga");
         $table->string("status_pekerjaan_kepala_keluarga");
         $table->string("jumlah_tanggungan_keluarga");
         $table->string("status_penghasilan_kepala_keluarga");
         $table->string("besaran_penghasilan_kepala_keluarga");
         $table->string("pencari_nafkah_keluarga");
         $table->string("status_hutang_keluarga");
         $table->string("besaran_hutang_keluarga");
         $table->string("sumber_perolehan_permakanan");
         $table->string("pernah_tidak_makan_seharian");
         $table->string("jumlah_makan_dalam_sehari");
         $table->string("pengeluaran_makan_dalam_sehari");
         $table->string("pemenuhan_gizi");
         $table->string("penghasilan_cukup_makan");
         $table->string("perolehan_sandang");
         $table->string("kemampuan_beli_baju");
         $table->string("kepemilikan_hp");
         $table->string("kepemilikan_kendaraan_pribadi");
         $table->string("kepemilikan_barang_berharga");
         $table->string("jumlah_anak_bersekolah_sd");
         $table->string("jumlah_anak_bersekolah_smp");
         $table->string("jumlah_anak_bersekolah_sma");
         $table->string("jumlah_anak_bersekolah_perguruan_tinggi");
         $table->string("anak_pernah_dapat_beasiswa");
         $table->string("anak_putus_sekolah");
         $table->string("keterangan_anak_putus_sekolah");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_kondisi_ekonomis');
   }
};
