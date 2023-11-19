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
      Schema::create('asesmen_kondisi_sosials', function (Blueprint $table) {
         $table->id("id_asesmen_kondisi_sosial");
         $table->string("id_asesmen_ppks");
         $table->string("bahasa_sehari_hari");
         $table->string("indikasi_ketelantaran");
         $table->string("tinggal_bersama");
         $table->string("kondisi_lingkungan");
         $table->string("jumlah_orang_di_rumah");
         $table->string("sosialiasi");
         $table->string("keberadaan_ortu");
         $table->string("penduduk_asli_pendatang");
         $table->string("asal_daerah");
         $table->string("riwayat_hukum");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_kondisi_sosials');
   }
};
