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
      Schema::create('asesmen_kepemilikan_adminduks', function (Blueprint $table) {
         $table->id("id_asesmen_kepemilikan_adminduk");
         $table->string("id_asesmen_ppks");
         $table->string("ktp_adminduk");
         $table->string("kk_adminduk");
         $table->string("akte_kelahiran_adminduk");
         $table->string("kia_adminduk");
         $table->string("buku_nikah_adminduk");
         $table->string("sim_adminduk");
         $table->string("kartu_bpjs_adminduk");
         $table->string("id_lainnya_adminduk");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_kepemilikan_adminduks');
   }
};
