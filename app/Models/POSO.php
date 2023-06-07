<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class POSO extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'po_so';

    protected $fillable = [
        'nilai',
        'nama_perusahaan',
        'type',
        'bulan',
        'tahun',
        'email',
        'pin',
        'date'
    ];
}
