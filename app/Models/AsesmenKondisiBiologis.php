<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenKondisiBiologis extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_kondisi_biologis',
      'id_asesmen_ppks',
      'kondisi_fisik',
      'ragam_disabilitas',
      'motorik_disabilitas',
      'jenis_disabilitas',
      'riwayat_penyakit_berat'
   ];
}
