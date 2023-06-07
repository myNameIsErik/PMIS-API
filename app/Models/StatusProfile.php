<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'status_profile';

    protected $fillable = [
        'judul_proyek',
        'status_proyek',
        'rencana_kerja',
        'kelas_dokumen',
        'lokasi_proyek',
        'inputgambarlokasi',
        'tujuan_proyek',
        'luas_lahan',
        'nilai_proyek',
        'model_bisnis',
        'faktor_sukses',
        'key_performance',
        'risiko',
        'mitigasi',
        'inputdokumentasi',
        'inputlaporanpenduluan',
        'inputlaporanantara',
        'inputlaporanakhir',
        'inputexecutivesummary',
        'jadwalpelaksanaan',
        'tenaga_ahli',
        'nama_tenaga_ahli',
        'tenaga_ahli2',
        'nama_tenaga_ahli2',
        'tenaga_ahli3',
        'nama_tenaga_ahli3',
        'tenaga_ahli4',
        'nama_tenaga_ahli4',
        'tenaga_ahli5',
        'nama_tenaga_ahli5',
        'tenaga_ahli6',
        'nama_tenaga_ahli6',
        'tenaga_ahli7',
        'nama_tenaga_ahli7',
        'tenaga_ahli8',
        'nama_tenaga_ahli8',
        'tenaga_ahli9',
        'nama_tenaga_ahli9',
        'tenaga_ahli10',
        'nama_tenaga_ahli10',
        'tenaga_ahli11',
        'nama_tenaga_ahli11',
        'tenaga_ahli12',
        'nama_tenaga_ahli12',
        'tenaga_ahli13',
        'nama_tenaga_ahli13',
        'inputdokumentasi2',
        'inputlaporanpenduluan2',
        'inputlaporanantara2',
        'inputlaporanakhir2',
        'inputexecutivesummary2',
        'email_user',
        'id_formulir'
    ];
}
