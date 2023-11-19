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
      Schema::create('asesmen_data_keluargas', function (Blueprint $table) {
         $table->id("id_asesmen_data_keluarga");
         $table->string("id_asesmen_ppks");
         $table->string("nama_pasangan");
         $table->string("status_pasangan");
         $table->string("usia_pasangan");
         $table->string("pendidikan_pasangan");
         $table->string("pekerjaan_pasangan");
         $table->string("penghasilan_pasangan");
         $table->string("alamat_pasangan");
         $table->string("keterangan_pasangan");
         $table->string("nama_ayah");
         $table->string("status_ayah");
         $table->string("usia_ayah");
         $table->string("pendidikan_ayah");
         $table->string("pekerjaan_ayah");
         $table->string("penghasilan_ayah");
         $table->string("alamat_ayah");
         $table->string("keterangan_ayah");
         $table->string("nama_ibu");
         $table->string("status_ibu");
         $table->string("usia_ibu");
         $table->string("pendidikan_ibu");
         $table->string("pekerjaan_ibu");
         $table->string("penghasilan_ibu");
         $table->string("alamat_ibu");
         $table->string("keterangan_ibu");
         $table->string("nama_anak");
         $table->string("status_anak");
         $table->string("usia_anak");
         $table->string("pendidikan_anak");
         $table->string("pekerjaan_anak");
         $table->string("penghasilan_anak");
         $table->string("alamat_anak");
         $table->string("keterangan_anak");
         $table->string("nama_terdekat");
         $table->string("status_terdekat");
         $table->string("usia_terdekat");
         $table->string("pendidikan_terdekat");
         $table->string("pekerjaan_terdekat");
         $table->string("penghasilan_terdekat");
         $table->string("alamat_terdekat");
         $table->string("keterangan_terdekat");
         $table->timestamps();
      });
   }

   /**
    * Reverse the migrations.
    */
   public function down(): void
   {
      Schema::dropIfExists('asesmen_data_keluargas');
   }
};
