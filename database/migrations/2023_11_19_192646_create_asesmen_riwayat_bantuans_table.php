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
      Schema::create('asesmen_riwayat_bantuans', function (Blueprint $table) {
         $table->id("id_asesmen_riwayat_bantuan");
         $table->string("id_asesmen_ppks");
         $table->string("status_dtks");
         $table->string("bantuan_sosial");
         $table->string("sejak_kapan");
         $table->string("keterangan_bantuan");
         $table->string("status_bantuan");
         $table->string("rehabilitasi_sosial");
         $table->string("lokasi_rehabilitasi_sosial");
         $table->string("tahun");
         $table->string("riwayat_pelatihan");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_riwayat_bantuans');
   }
};
