<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrangTua extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ayah',
        'nama_ibu',
        'no_hp',
        'pekerjaan_ayah',
        'pekerjaan_ibu',
    ];

    public function murid()
    {
        return $this->hasMany(DataMurid::class);
    }
}
