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
      Schema::create('asesmen_diagnosa_layanan_intervensis', function (Blueprint $table) {
         $table->id("id_asesmen_data_keluarga");
         $table->string("id_asesmen_ppks");
         $table->text("permasalahan_saat_ini");
         $table->string("kebutuhan_ppks");
         $table->text("bentuk_rehabsos");
         $table->text("opd_terkait_dilibatkan");
         $table->text("opd_terkait_program");
         $table->text("program_dinsos");
         $table->string("foto_ppks");
         $table->string("foto_ktp_ppks");
         $table->string("foto_rumah_tampak_depan");
         $table->string("foto_rumah_tampak_dalam");
         $table->string("foto_home_visit");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_diagnosa_layanan_intervensis');
   }
};
