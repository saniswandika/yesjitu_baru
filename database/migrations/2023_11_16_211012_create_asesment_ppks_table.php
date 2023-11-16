<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('asesment_ppks', function (Blueprint $table) {
                $table->id();
                $table->string('id_asesmen_ppks');
                $table->string('pekerja_sosial');
                $table->string('jenis_ppks_utama');
                $table->string('status_ppks');
                $table->string('jenis_ppks_lainnya');
                $table->date('tanggal_asesmen');
                $table->string('lokasi_asesmen');
                $table->unsignedBigInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asesment_ppks');
    }
};
