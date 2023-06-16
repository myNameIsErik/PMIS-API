<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormulirPengajuanNIP extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'formulir_pengajuan_nip';

    protected $fillable = [
        'tgl',
        'manajer_dept',
        'proyek_manajer',
        'proyek_administrasi',
        'judul_proyek',
        'jenis_bidang_proyek',
        'bidang_proyek',
        'nama_pemilik_proyek',
        'alamat_pemilik_proyek',
        'email_pemilik_proyek',
        'npwp_pemilik_proyek',
        'telp_pemilik_proyek',
        'fax_pemilik_proyek',
        'narahubung_pemilik_proyek',
        'kontak_narahubung_pemilik',
        'sumber_info_peluang',
        'kelengkapan_administrasi',
        'jenis_proyek',
        'jenis_pengelolaan',
        'catatan',
        'ketua_tim',
        'ktp_ketua_tim',
        'npwp_ketua_tim',
        'penanggung_jawab',
        'narahubung_ketua_tim',
        'email_tim',
        'telp_ketua_tim',
        'alamat_tim',
        'kelompok_pelaksana',
        'kelompok_keahlian',
        'sesuai_bidang',
        'cv',
        'input_cv',
        'ktp',
        'input_ktp',
        'npwp',
        'input_npwp',
        'ijazah',
        'inputijazah',
        'rekam_jejak_ketua',
        'proses_pengadaan',
        'tahap_peluang',
        'jenis_institusi_pemilik',
        'rekam_jejak_pemilik',
        'perkiraan_nilai_proyek',
        'nilai_proyek',
        'status_profile',
        'file',
        'pemberi_kerja',
        'nama_tim',
        'penyelesaian',
        'status',
        'id_rekanan',
        'inputcv2',
        'inputktp2',
        'm_f',
        'data_kontrak',
        'bidang_profile',
        'inputnpwp2',
        'inputijazah2',
        'email_user',
        'ket_pengelolaan',
        'klasifikasi_bumn',
        'subkon_nama',
        'berita_acara',
        'euro_matauang',
        'jpy_matauang',
        'dollar_matauang',
        'rupiah_matauang',
        'kode_akhir_periode',
        'tahapan_penagihan',
        'laporan',
        'no_data_kontrak',
        'akhir_waktu_datakontrak',
        'amandemen',
        'pembayaran',
        'kemajuan_proyek',
        'inputsalinansp3',
        'inputsalinanikhtisar',
        'kode_klasifikasi',
        'catatanNego',
        'id_formulir',
        'tgl_datakontrak',
        'inputlaporanantara',
        'inputlaporanpendahuluan',
        'inputlaporanakhir',
        'inputlaporanantara2',
        'inputlaporanpendahuluan2',
        'inputlaporanakhir2',
        'inputlaporanlainnya1',
        'inputlaporanlainnya2',
        'inputlaporanlainnya3',
        'inputlaporanpenyelesaian',
        'inputlaporanpembayaran',
        'deskripsi_invoice',
        'tgl_amandemen',
        'scope_amandemen',
        'nilai_amandemen',
        'inputlaporankemajuan',
        'lp_tanggal',
        'lp_kelengkapan',
        'lan_tanggal',
        'lk_tanggal',
        'lak_tanggal',
        'laplain1_tanggal',
        'laplain2_tanggal',
        'laplain3_tanggal',
        'lp_keterangan',
        'lan_kelengkapan',
        'lk_kelengkapan',
        'lak_kelengkapan',
        'laplain1_kelengkapan',
        'laplain2_kelengkapan',
        'laplain3_kelengkapan',
        'lan_keterangan',
        'lk_keterangan',
        'lak_keterangan',
        'laplain1_keterangan',
        'laplain2_keterangan',
        'laplain3_keterangan',
        'inputbalaporanpendahuluan',
        'inputbalaporankemajuan',
        'inputbalaporanakhir',
        'inputbalaporanlainnya1',
        'inputbalaporanlainnya2',
        'inputbalaporanlainnya3',
        'inputbalaporanantara',
        'adendum',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'email_user', 'email');
    }
    
    public function pin()
    {
        return $this->belongsTo(DataPin::class, 'id_formulir', 'id_formulir');
    }
    
    public function rekanan()
    {
        return $this->belongsTo(Rekanan::class, 'id_rekanan', 'id');
    }

    public function keahlian()
    {
        return $this->belongsTo(KelompokKeahlian::class, 'kelompok_keahlian', 'nama');
    }
}
