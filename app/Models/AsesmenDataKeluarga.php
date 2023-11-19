<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenDataKeluarga extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_data_keluarga',
      'id_asesmen_ppks',
      'nama_pasangan',
      'status_pasangan',
      'usia_pasangan',
      'pendidikan_pasangan',
      'pekerjaan_pasangan',
      'penghasilan_pasangan',
      'alamat_pasangan',
      'keterangan_pasangan',
      'nama_ayah',
      'status_ayah',
      'usia_ayah',
      'pendidikan_ayah',
      'pekerjaan_ayah',
      'penghasilan_ayah',
      'alamat_ayah',
      'keterangan_ayah',
      'nama_ibu',
      'status_ibu',
      'usia_ibu',
      'pendidikan_ibu',
      'pekerjaan_ibu',
      'penghasilan_ibu',
      'alamat_ibu',
      'keterangan_ibu',
      'nama_anak',
      'status_anak',
      'usia_anak',
      'pendidikan_anak',
      'pekerjaan_anak',
      'penghasilan_anak',
      'alamat_anak',
      'keterangan_anak',
      'nama_terdekat',
      'status_terdekat',
      'usia_terdekat',
      'pendidikan_terdekat',
      'pekerjaan_terdekat',
      'penghasilan_terdekat',
      'alamat_terdekat',
      'keterangan_terdekat'
   ];
}
