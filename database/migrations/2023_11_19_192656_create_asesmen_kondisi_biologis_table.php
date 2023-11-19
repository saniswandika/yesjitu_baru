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
      Schema::create('asesmen_kondisi_biologis', function (Blueprint $table) {
         $table->id("id_asesmen_kondisi_biologis");
         $table->string("id_asesmen_ppks");
         $table->string("kondisi_fisik");
         $table->string("ragam_disabilitas");
         $table->string("motorik_disabilitas");
         $table->string("jenis_disabilitas");
         $table->string("riwayat_penyakit_berat");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_kondisi_biologis');
   }
};
