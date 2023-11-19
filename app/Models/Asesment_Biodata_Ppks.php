<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesment_Biodata_Ppks extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_asesmen_biodata'; // Assuming 'id_asesmen_biodata' is the primary key

    public function asesmentPpks()
    {
        return $this->belongsTo(asesment_ppks::class, 'id_asesmen_ppks', 'id_asesmen_ppks');
    }
}
