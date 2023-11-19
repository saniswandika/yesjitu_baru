<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenPpks extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_ppks',
      'pekerja_sosial',
      'jenis_ppks_utama',
      'status_ppks',
      'jenis_ppks_lainnya',
      'tanggal_asesmen',
      'lokasi_asesmen',
      'user_id',
   ];
}
