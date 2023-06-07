<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProyekKonstruksi extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'bidang_proyek_konstruksi';

    protected $fillable = [
        'kode_kbli',
        'nama_bidang',
        'kode_subklasifikasi'
    ];
}
