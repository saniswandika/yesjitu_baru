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
      Schema::create('asesmen_aspek_akademis', function (Blueprint $table) {
         $table->id("id_asesmen_aspek_akademis");
         $table->string("id_asesmen_ppks");
         $table->string("mampu_baca");
         $table->string("mampu_tulis");
         $table->string("mampu_hitung");
         $table->string("pengalaman_kerja");
         $table->string("prestasi");
         $table->string("hobi");
         $table->string("minat");
         $table->string("bakat");
         $table->string("keterampilan_mahir");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_aspek_akademis');
   }
};
