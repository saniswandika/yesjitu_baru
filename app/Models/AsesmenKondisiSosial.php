<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenKondisiSosial extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_kondisi_sosial',
      'id_asesmen_ppks',
      'bahasa_sehari_hari',
      'indikasi_ketelantaran',
      'tinggal_bersama',
      'kondisi_lingkungan',
      'jumlah_orang_di_rumah',
      'sosialiasi',
      'keberadaan_ortu',
      'penduduk_asli_pendatang',
      'asal_daerah',
      'riwayat_hukum'
   ];
}
