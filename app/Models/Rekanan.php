<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekanan extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'add_rekanan';

    protected $fillable = [
        'nama_pekerjaan',
        'pemberi_kerja',
        'nama_tim',
        'proyek_manajer',
        'proyek_administrasi',
        'nilai_proyek',
        'status',
        'email_user',
        'status_profile',
        'catatan'
    ];

    public function emailUser()
    {
        return $this->belongsTo(User::class, 'email_user', 'email');
    }

    public function pengajuanNIP()
    {
        return $this->hasOne(FormulirPengajuanNIP::class, 'id_rekanan', 'id');
    }
}
