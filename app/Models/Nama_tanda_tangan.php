<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nama_tanda_tangan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_tandatgn',
        'jabatan',
        'nip',
    ];

    public function surat_keluar()
    {
        return $this->hasMany(Surat_keluar::class, 'id_nama_tanda_tangan');
    }

    public function surat_masuk()
    {
        return $this->hasMany(Surat_masuk::class, 'id_nama_tanda_tangan');
    }
}
