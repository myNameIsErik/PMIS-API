<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikhtisar extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'ikhtisar';

    protected $fillable = [
        'nip',
        'metode_ppbj',
        'tgl_kontrak_ikhtisar',
        'lingkup_proyek',
        'nilai_kontrak',
        'jangka_waktu_kontrak',
        'mulai_periode_kontrak',
        'awal_waktu_kontrak',
        'akhir_waktu_kontrak',
        'tgl_selesai_proyek_kontrak',
        'tgl_selesai_proyek_beritaacara',
        'jumlah_perubahan',
        'perubahan_lingkup',
        'perubahan_waktu',
        'perubahan_biaya',
        'lokasi_proyek_ikhtisar',
        'nama_penandatanganan_kontrak',
        'telpon_penandatanganan_kontrak',
        'email_penandatanganan_kontrak',
        'nama_manajer',
        'telpon_manajer',
        'email_manajer',
        'nama_administrator',
        'telpon_administrator',
        'email_administrator',
        'nama_institusi_pemilik',
        'alamat_institusi_pemilik',
        'jenis_institusi_pemilik_ikhtisar',
        'nama_pejabat_pembuat_komitmen',
        'telpon_pejabat_pembuat_komitmen',
        'email_pejabat_pembuat_komitmen',
        'nama_pengguna',
        'telepon_pengguna',
        'email_pengguna',
        'nama_keuangan',
        'telepon_keuangan',
        'email_keuangan',
        'nama_penanggungjawab_pelaksana',
        'telpon_penanggungjawab_pelaksana',
        'email_penanggungjawab_pelaksana',
        'nama_ketuatim_pelaksana',
        'telpon_ketuatim_pelaksana',
        'email_ketuatim_pelaksana',
        'nama_narahubung_pelaksana',
        'telpon_narahubung_pelaksana',
        'email_narahubung_pelaksana',
        'posisi_tenaga_ahli1',
        'nama_tenaga_ahli1',
        'status_tenaga_ahli1',
        'posisi_tenaga_ahli2',
        'nama_tenaga_ahli2',
        'status_tenaga_ahli2',
        'posisi_tenaga_ahli3',
        'nama_tenaga_ahli3',
        'status_tenaga_ahli3',
        'posisi_tenaga_ahli4',
        'nama_tenaga_ahli4',
        'status_tenaga_ahli4',
        'posisi_tenaga_ahli5',
        'nama_tenaga_ahli5',
        'status_tenaga_ahli5',
        'posisi_tenaga_ahli6',
        'nama_tenaga_ahli6',
        'status_tenaga_ahli6',
        'jumlah_tenaga_ahli_asing',
        'jumlah_tenaga_ahli_asing1',
        'jumlah_tenaga_ahli_asing2',
        'jumlah_tenaga_ahli_asing3',
        'jumlah_tenaga_ahli_asing4',
        'jumlah_tenaga_ahli_asing5',
        'jumlah_tenaga_ahli_asing6',
        'jumlah_tenaga_ahli_indonesia',
        'jumlah_tenaga_ahli_indonesia1',
        'jumlah_tenaga_ahli_indonesia2',
        'jumlah_tenaga_ahli_indonesia3',
        'jumlah_tenaga_ahli_indonesia4',
        'jumlah_tenaga_ahli_indonesia5',
        'jumlah_tenaga_ahli_indonesia6',
        'ttd_project_manager',
        'ttd_manajer_pu',
        'ttd_direktur',
        'id_formulir',
        'nilai_proyek',
    ];
}
