<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratSPPP extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'suratsppp';

    protected $fillable = [
        'pin',
        'no_surat',
        'tanggal',
        'pihak_pertama',
        'jabatan',
        'pihak_kedua',
        'nama_proyek',
        'pemilik_proyek',
        'periode_kontrak_sp3',
        'akhir_periode_kontrak_sp3',
        'nilai_kontrak_sp3',
        'nama_pemilik_rekening',
        'no_rekening',
        'nama_bank',
        'alamat_bank',
        'ttd_pihakpertama',
        'ttd_pihakkedua',
        'id_formulir',
        'nilai_proyek'
    ];
}
