<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelompokKeahlian extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'kelompok_keahlian';

    protected $fillable = [
        'nama'
    ];

    public function nip()
    {
        return $this->hasMany(FormulirPengajuanNIP::class, 'kelompok_keahlian', 'id');
    }
}
