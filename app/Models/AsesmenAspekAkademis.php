<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenAspekAkademis extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_aspek_akademis',
      'id_asesmen_ppks',
      'mampu_baca',
      'mampu_tulis',
      'mampu_hitung',
      'pengalaman_kerja',
      'prestasi',
      'hobi',
      'minat',
      'bakat',
      'keterampilan_mahir'
   ];
}
