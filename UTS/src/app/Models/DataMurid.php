<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataMurid extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'nis',
        'nisn',
        'tempat_tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'kewarganegaraan',
        'alamat',
        'kelas_id',
        'orangtua_id',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function orangtua()
    {
        return $this->belongsTo(OrangTua::class);
    }
}
