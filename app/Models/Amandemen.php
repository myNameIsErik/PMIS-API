<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amandemen extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'amandemen_temp';

    protected $fillable = [
        'id_formulir',
        'tgl_datakontrak',
        'akhir_waktu_datakontrak',
        'amandemen',
        'tgl_amandemen',
        'scope_amandemen',
        'nilai_amandemen',
        'kode_akhir_periode',
        'm_f',
        'date_update',
        'adendum'
    ];
}
