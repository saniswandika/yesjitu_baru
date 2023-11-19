<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asesment_ppks extends Model
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

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function biodataPpks()
    {
        return $this->hasMany(AsesmentBiodataPpks::class, 'id_asesmen_ppks', 'id_asesmen_ppks');
    }
}
