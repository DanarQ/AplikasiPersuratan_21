<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepala_surat extends Model
{
    use HasFactory;
    protected $table = 'Kepala_surat';
    protected $fillable = [
        'nama_kop',
        'alamat_kop',
        'nama_tujuan',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
