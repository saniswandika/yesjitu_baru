<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AsesmenKondisiEkonomi extends Model
{
   use HasFactory;

   protected $fillable = [
      'id_asesmen_kondisi_ekonomi',
      'id_asesmen_ppks',
      'karakteristik_lingkungan',
      'riwayat_pindah_domisili',
      'kondisi_pemukiman',
      'status_tempat_tinggal',
      'status_kepemilikan_tanah',
      'luas_rumah',
      'sudah_berapa_lama_tinggal',
      'harga_sewa_rumah',
      'apakah_rawan_bencana',
      'kondisi_rumah',
      'kondisi_bangunan',
      'kondisi_dinding',
      'kondisi_lantai',
      'kondisi_atap',
      'fasilitas_mck',
      'akses_listrik',
      'sumber_air',
      'ppks_kepala_keluarga',
      'kepala_keluarga_bekerja',
      'jenis_pekerjaan_kepala_keluarga',
      'deskripsi_pekerjaan_kepala_keluarga',
      'status_pekerjaan_kepala_keluarga',
      'jumlah_tanggungan_keluarga',
      'status_penghasilan_kepala_keluarga',
      'besaran_penghasilan_kepala_keluarga',
      'pencari_nafkah_keluarga',
      'status_hutang_keluarga',
      'besaran_hutang_keluarga',
      'sumber_perolehan_permakanan',
      'pernah_tidak_makan_seharian',
      'jumlah_makan_dalam_sehari',
      'pengeluaran_makan_dalam_sehari',
      'pemenuhan_gizi',
      'penghasilan_cukup_makan',
      'perolehan_sandang',
      'kemampuan_beli_baju',
      'kepemilikan_hp',
      'kepemilikan_kendaraan_pribadi',
      'kepemilikan_barang_berharga',
      'jumlah_anak_bersekolah_sd',
      'jumlah_anak_bersekolah_smp',
      'jumlah_anak_bersekolah_sma',
      'jumlah_anak_bersekolah_perguruan_tinggi',
      'anak_pernah_dapat_beasiswa',
      'anak_putus_sekolah',
      'keterangan_anak_putus_sekolah'
   ];
}
