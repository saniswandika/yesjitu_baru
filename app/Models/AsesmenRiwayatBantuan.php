<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenRiwayatBantuan extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_riwayat_bantuan',
      'id_asesmen_ppks',
      'status_dtks',
      'bantuan_sosial',
      'sejak_kapan',
      'keterangan_bantuan',
      'status_bantuan',
      'rehabilitasi_sosial',
      'lokasi_rehabilitasi_sosial',
      'tahun',
      'riwayat_pelatihan'
   ];
}
