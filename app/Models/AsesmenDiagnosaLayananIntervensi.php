<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenDiagnosaLayananIntervensi extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_data_keluarga',
      'id_asesmen_ppks',
      'permasalahan_saat_ini',
      'kebutuhan_ppks',
      'bentuk_rehabsos',
      'opd_terkait_dilibatkan',
      'opd_terkait_program',
      'program_dinsos',
      'foto_ppks',
      'foto_ktp_ppks',
      'foto_rumah_tampak_depan',
      'foto_rumah_tampak_dalam',
      'foto_home_visit'
   ];
}
