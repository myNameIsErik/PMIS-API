<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataProyek extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'data_proyek';

    protected $fillable = [
        'kode_proyek',
        'tahap_proyek',
        'tgl_1',
        'tgl_2',
        'tgl_3',
        'tgl_terdekat',
        'status',
        'pm'
    ];
}
