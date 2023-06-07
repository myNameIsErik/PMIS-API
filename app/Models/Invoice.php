<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'invoice';

    protected $fillable = [
        'pin',
        'no_invoice',
        'tanggal_permohonan',
        'presentase_pembayaran',
        'jumlah_pembayaran',
        'termin',
        'tandatangan',
        'no_po',
        'no_spk',
        'no_amandemen',
        'tgl_proyek',
        'nilai_proyek',
        'id_formulir',
        'perkiraan_pembayaran',
        'bank',
        'norek',
        'deskripsi_invoice',
        'no_faktur_pajak',
        'ppn',
        'status_no',
        'status_pembayaran'
    ];

    public function banks()
    {
        return $this->belongsTo(Bank::class, 'bank', 'id');
    }

    public function forms()
    {
        return $this->belongsTo(FormulirPengajuanNIP::class, 'id_formulir', 'id');
    }

    public function pins()
    {
        return $this->belongsTo(DataPin::class, 'pin', 'id');
    }
}
