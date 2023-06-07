<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negosiasi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'negosiasi';

    protected $fillable = [
        'inputdokumen',
        'judul_proyek_negosiasi',
        'rencana_nilai_proyek',
        'keterangan',
        'catatan',
        'email_user',
        'id_formulir',
        'statusNego',
        'catatanDireksi',
        'status_profile',
        'ttd_sepihak'
    ];
}
