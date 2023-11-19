<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenBiodataPpks extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_biodata',
      'id_asesmen_ppks',
      'nama_lengkap',
      'nik',
      'nama_ibu_kandung',
      'jenis_kelamin',
      'tempat_lahir',
      'tanggal_lahir',
      'shdk_dalam_kk',
      'pekerjaan',
      'nomor_kk',
      'nomor_hp',
      'suku_bangsa',
      'agama',
      'usia',
      'anak_ke',
      'bersaudara',
      'status_ktp',
      'alamat_ktp',
      'rt_ktp',
      'rw_ktp',
      'kelurahan_ktp',
      'kecamatan_ktp',
      'kota_ktp',
      'provinsi_ktp',
      'alamat_domisili',
      'rt_domisili',
      'rw_domisili',
      'kelurahan_domisili',
      'kecamatan_domisili',
      'kota_domisili',
      'provinsi_domisili',
      'status_perkawinan',
      'jumlah_anak',
      'keterangan_perkawinan',
      'perkawinan_ke',
      'tingkat_pendidikan',
      'tamat_tidak',
      'keterangan_pendidikan',
      'sekolah',
      'jurusan'
   ];
}
