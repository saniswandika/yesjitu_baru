<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenKepemilikanAdminduk extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_kepemilikan_adminduk',
      'id_asesmen_ppks',
      'ktp_adminduk',
      'kk_adminduk',
      'akte_kelahiran_adminduk',
      'kia_adminduk',
      'buku_nikah_adminduk',
   'sim_adminduk',
      'kartu_bpjs_adminduk',
      'id_lainnya_adminduk'
   ];
}
