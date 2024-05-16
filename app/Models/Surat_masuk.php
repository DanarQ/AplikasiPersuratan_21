<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Surat_masuk extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'no_surat',
        'asal_surat',
        'perihal',
        'disp1',
        'disp2',
        'kepala_surat_id',
        'id_nama_tanda_tangan',
        'image',
    ];

    public function kepala_surat()
    {
        return $this->belongsTo(Kepala_surat::class, 'kepala_surat_id');
    }

    public function tanda_tangan()
    {
        return $this->belongsTo(Nama_tanda_tangan::class, 'id_nama_tanda_tangan');
    }
}
