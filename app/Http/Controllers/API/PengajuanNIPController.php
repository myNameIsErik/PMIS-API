<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\FormulirPengajuanNIP;
use Illuminate\Http\Request;

class PengajuanNIPController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $tgl = $request->input('tgl');
        $manajer_dept = $request->input('manajer_dept');
        $proyek_manajer = $request->input('proyek_manajer');
        $proyek_administrasi = $request->input('proyek_administrasi');
        $judul_proyek = $request->input('judul_proyek');
        $jenis_bidang_proyek = $request->input('jenis_bidang_proyek');
        $bidang_proyek = $request->input('bidang_proyek');
        $nama_pemilik_proyek = $request->input('nama_pemilik_proyek');
        $alamat_pemilik_proyek = $request->input('alamat_pemilik_proyek');
        $email_pemilik_proyek = $request->input('email_pemilik_proyek');
        $npwp_pemilik_proyek = $request->input('npwp_pemilik_proyek');
        $telp_pemilik_proyek = $request->input('telp_pemilik_proyek');
        $fax_pemilik_proyek = $request->input('fax_pemilik_proyek');
        $narahubung_pemilik_proyek = $request->input('narahubung_pemilik_proyek');
        $kontak_narahubung_pemilik = $request->input('kontak_narahubung_pemilik');
        $sumber_info_peluang = $request->input('sumber_info_peluang');
        $kelengkapan_administrasi = $request->input('kelengkapan_administrasi');
        $jenis_proyek = $request->input('jenis_proyek');
        $jenis_pengelolaan = $request->input('jenis_pengelolaan');
        $catatan = $request->input('catatan');
        $ketua_tim = $request->input('ketua_tim');
        $ktp_ketua_tim = $request->input('ktp_ketua_tim');
        $npwp_ketua_tim = $request->input('npwp_ketua_tim');
        $penanggung_jawab = $request->input('penanggung_jawab');
        $narahubung_ketua_tim = $request->input('narahubung_ketua_tim');
        $email_tim = $request->input('email_tim');
        $telp_ketua_tim = $request->input('telp_ketua_tim');
        $alamat_tim = $request->input('alamat_tim');
        $kelompok_pelaksana = $request->input('kelompok_pelaksana');
        $kelompok_keahlian = $request->input('kelompok_keahlian');
        $sesuai_bidang = $request->input('sesuai_bidang');
        $cv = $request->input('cv');
        $inputcv = $request->input('inputcv');
        $ktp = $request->input('ktp');
        $inputktp = $request->input('inputktp');
        $npwp = $request->input('npwp');
        $inputnpwp = $request->input('inputnpwp');
        $ijazah = $request->input('ijazah');
        $inputijazah = $request->input('inputijazah');
        $rekam_jejak_ketua = $request->input('rekam_jejak_ketua');
        $proses_pengadaan = $request->input('proses_pengadaan');
        $tahap_peluang = $request->input('tahap_peluang');
        $jenis_institusi_pemilik = $request->input('jenis_institusi_pemilik');
        $rekam_jejak_pemilik = $request->input('rekam_jejak_pemilik');
        $perkiraan_nilai_proyek = $request->input('perkiraan_nilai_proyek');
        $nilai_proyek = $request->input('nilai_proyek');
        $status_profile = $request->input('status_profile');
        $file = $request->input('file');
        $pemberi_kerja = $request->input('pemberi_kerja');
        $nama_tim = $request->input('nama_tim');
        $penyelesaian = $request->input('penyelesaian');
        $status = $request->input('status');
        $id_rekanan = $request->input('id_rekanan');
        $inputktp2 = $request->input('inputktp2');
        $inputcv2 = $request->input('inputcv2');
        $m_f = $request->input('m_f');
        $data_kontrak = $request->input('data_kontrak');
        $bidang_profile = $request->input('bidang_profile');
        $inputnpwp2 = $request->input('inputnpwp2');
        $inputijazah2 = $request->input('inputijazah2');
        $email_user = $request->input('email_user');
        $ket_pengelolaan = $request->input('ket_pengelolaan');
        $klasifikasi_bumn = $request->input('klasifikasi_bumn');
        $subkon_nama = $request->input('subkon_nama');
        $berita_acara = $request->input('berita_acara');
        $euro_matauang = $request->input('euro_matauang');
        $jpy_matauang = $request->input('jpy_matauang');
        $dollar_matauang = $request->input('dollar_matauang');
        $rupiah_matauang = $request->input('rupiah_matauang');
        $kode_akhir_periode = $request->input('kode_akhir_periode');
        $tahapan_penagihan = $request->input('tahapan_penagihan');
        $laporan = $request->input('laporan');
        $no_data_kontrak = $request->input('no_data_kontrak');
        $akhir_waktu_datakontrak = $request->input('akhir_waktu_datakontrak');
        $amandemen = $request->input('amandemen');
        $pembayaran = $request->input('pembayaran');
        $kemajuan_proyek = $request->input('kemajuan_proyek');
        $inputsalinansp3 = $request->input('inputsalinansp3');
        $inputsalinanikhtisar = $request->input('inputsalinanikhtisar');
        $kode_klasifikasi = $request->input('kode_klasifikasi');
        $catatanNego = $request->input('catatanNego');
        $id_formulir = $request->input('id_formulir');
        $tgl_datakontrak = $request->input('tgl_datakontrak');
        $inputlaporanantara = $request->input('inputlaporanantara');
        $inputlaporanpendahuluan = $request->input('inputlaporanpendahuluan');
        $inputlaporanakhir = $request->input('inputlaporanakhir');
        $inputlaporanantara2 = $request->input('inputlaporanantara2');
        $inputlaporanpendahuluan2 = $request->input('inputlaporanpendahuluan2');
        $inputlaporanakhir2 = $request->input('inputlaporanakhir2');
        $inputlaporanlainnya1 = $request->input('inputlaporanlainnya1');
        $inputlaporanlainnya2 = $request->input('inputlaporanlainnya2');
        $inputlaporanlainnya3 = $request->input('inputlaporanlainnya3');
        $inputlaporanpenyelesaian = $request->input('inputlaporanpenyelesaian');
        $inputlaporanpembayaran = $request->input('inputlaporanpembayaran');
        $deskripsi_invoice = $request->input('deskripsi_invoice');
        $tgl_amandemen = $request->input('tgl_amandemen');
        $scope_amandemen = $request->input('scope_amandemen');
        $nilai_amandemen = $request->input('nilai_amandemen');
        $inputlaporankemajuan = $request->input('inputlaporankemajuan');
        $lp_tgl = $request->input('lp_tgl');
        $lp_kelengkapan = $request->input('lp_kelengkapan');
        $lan_tanggal = $request->input('lan_tanggal');
        $lk_tanggal = $request->input('lk_tanggal');
        $lak_tanggal = $request->input('lak_tanggal');
        $laplain1_tanggal = $request->input('laplain1_tanggal');
        $laplain2_tanggal = $request->input('laplain2_tanggal');
        $laplain3_tanggal = $request->input('laplain3_tanggal');
        $lan_keterangan = $request->input('lan_keterangan');
        $lp_keterangan = $request->input('lp_keterangan');
        $lan_kelengkapan = $request->input('lan_kelengkapan');
        $lk_kelengkapan = $request->input('lk_kelengkapan');
        $lak_kelengkapan = $request->input('lak_kelengkapan');
        $laplain1_kelengkapan = $request->input('laplain1_kelengkapan');
        $laplain2_kelengkapan = $request->input('laplain2_kelengkapan');
        $laplain3_kelengkapan = $request->input('laplain3_kelengkapan');
        $lk_keterangan = $request->input('lk_keterangan');
        $lak_keterangan = $request->input('lak_keterangan');
        $laplain1_keterangan = $request->input('laplain1_keterangan');
        $laplain2_keterangan = $request->input('laplain2_keterangan');
        $laplain3_keterangan = $request->input('laplain3_keterangan');
        $inputlaporanpendahuluan = $request->input('inputlaporanpendahuluan');
        $inputlaporankemajuan = $request->input('inputlaporankemajuan');
        $inputlaporanakhir = $request->input('inputlaporanakhir');
        $inputlaporanlainnya1 = $request->input('inputlaporanlainnya1');
        $inputlaporanlainnya2 = $request->input('inputlaporanlainnya2');
        $inputlaporanlainnya3 = $request->input('inputlaporanlainnya3');
        $inputlaporanantara = $request->input('inputlaporanantara');
        $adendum = $request->input('adendum');
        $selesai = $request->input('selesai');
        $catatan_selesai = $request->input('catatan_selesai');
        $ket_gagal = $request->input('ket_gagal');

        if ($id)
        {
            $nip = FormulirPengajuanNIP::with(['user', 'pin', 'rekanan', 'keahlian'])->find($id);

            if ($nip) {
                return ResponseFormatter::success(
                    $nip,
                    'Data NIP Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data NIP Tidak Ada.',
                    404
                );
            }
        }

        $nip = FormulirPengajuanNIP::with(['user', 'pin', 'rekanan', 'keahlian']);

        if ($tgl) {
            $nip->where('tgl', 'like', '%' . $tgl . '%');
        }
        if ($manajer_dept) {
            $nip->where('mana$manajer_dept', 'like', '%' . $manajer_dept . '%');
        }
        if ($proyek_manajer) {
            $nip->where('pro$proyek_manajer', 'like', '%' . $proyek_manajer . '%');
        }
        if ($proyek_administrasi) {
            $nip->where('proyek_administrasi', 'like', '%' . $proyek_administrasi . '%');
        }
        if ($judul_proyek) {
            $nip->where('judul_proyek', 'like', '%' . $judul_proyek . '%');
        }
        if ($jenis_bidang_proyek) {
            $nip->where('jenis_bidang_proyek', 'like', '%' . $jenis_bidang_proyek . '%');
        }
        if ($bidang_proyek) {
            $nip->where('bidang_proyek', 'like', '%' . $bidang_proyek . '%');
        }
        if ($nama_pemilik_proyek) {
            $nip->where('nama_pemilik_proyek', 'like', '%' . $nama_pemilik_proyek . '%');
        }
        if ($alamat_pemilik_proyek) {
            $nip->where('alamat_pemilik_proyek', 'like', '%' . $alamat_pemilik_proyek . '%');
        }
        if ($email_pemilik_proyek) {
            $nip->where('email_pemilik_proyek', 'like', '%' . $email_pemilik_proyek . '%');
        }
        if ($npwp_pemilik_proyek) {
            $nip->where('npwp_pemilik_proyek', 'like', '%' . $npwp_pemilik_proyek . '%');
        }
        if ($telp_pemilik_proyek) {
            $nip->where('telp_pemilik_proyek', 'like', '%' . $telp_pemilik_proyek . '%');
        }
        if ($fax_pemilik_proyek) {
            $nip->where('fax_pemilik_proyek', 'like', '%' . $fax_pemilik_proyek . '%');
        }
        if ($narahubung_pemilik_proyek) {
            $nip->where('narahubung_pemilik_proyek', 'like', '%' . $narahubung_pemilik_proyek . '%');
        }
        if ($kontak_narahubung_pemilik) {
            $nip->where('kontak_narahubung_pemilik', 'like', '%' . $kontak_narahubung_pemilik . '%');
        }
        if ($sumber_info_peluang) {
            $nip->where('sumber_info_peluang', 'like', '%' . $sumber_info_peluang . '%');
        }
        if ($kelengkapan_administrasi) {
            $nip->where('kelengkapan_administrasi', 'like', '%' . $kelengkapan_administrasi . '%');
        }
        if ($jenis_proyek) {
            $nip->where('jenis_proyek', 'like', '%' . $jenis_proyek . '%');
        }
        if ($jenis_pengelolaan) {
            $nip->where('jenis_pengelolaan', 'like', '%' . $jenis_pengelolaan . '%');
        }
        if ($catatan) {
            $nip->where('catatan', 'like', '%' . $catatan . '%');
        }
        if ($ketua_tim) {
            $nip->where('ketua_tim', 'like', '%' . $ketua_tim . '%');
        }
        if ($ktp_ketua_tim) {
            $nip->where('ktp_ketua_tim', 'like', '%' . $ktp_ketua_tim . '%');
        }
        if ($npwp_ketua_tim) {
            $nip->where('npwp_ketua_tim', 'like', '%' . $npwp_ketua_tim . '%');
        }
        if ($penanggung_jawab) {
            $nip->where('penanggung_jawab', 'like', '%' . $penanggung_jawab . '%');
        }
        if ($narahubung_ketua_tim) {
            $nip->where('narahubung_ketua_tim', 'like', '%' . $narahubung_ketua_tim . '%');
        }
        if ($email_tim) {
            $nip->where('email_tim', 'like', '%' . $email_tim . '%');
        }
        if ($telp_ketua_tim) {
            $nip->where('telp_ketua_tim', 'like', '%' . $telp_ketua_tim . '%');
        }
        if ($alamat_tim) {
            $nip->where('alamat_tim', 'like', '%' . $alamat_tim . '%');
        }
        if ($kelompok_pelaksana) {
            $nip->where('kelompok_pelaksana', 'like', '%' . $kelompok_pelaksana . '%');
        }
        if ($kelompok_keahlian) {
            $nip->where('kelompok_keahlian', 'like', '%' . $kelompok_keahlian . '%');
        }
        if ($sesuai_bidang) {
            $nip->where('sesuai_bidang', 'like', '%' . $sesuai_bidang . '%');
        }
        if ($cv) {
            $nip->where('cv', 'like', '%' . $cv . '%');
        }
        if ($inputcv) {
            $nip->where('inputcv', 'like', '%' . $inputcv . '%');
        }
        if ($ktp) {
            $nip->where('ktp', 'like', '%' . $ktp . '%');
        }
        if ($inputktp) {
            $nip->where('inputktp', 'like', '%' . $inputktp . '%');
        }
        if ($npwp) {
            $nip->where('npwp', 'like', '%' . $npwp . '%');
        }
        if ($inputnpwp) {
            $nip->where('inputnpwp', 'like', '%' . $inputnpwp . '%');
        }
        if ($ijazah) {
            $nip->where('ijazah', 'like', '%' . $ijazah . '%');
        }
        if ($inputijazah) {
            $nip->where('inputijazah', 'like', '%' . $inputijazah . '%');
        }
        if ($rekam_jejak_ketua) {
            $nip->where('rekam_jejak_ketua', 'like', '%' . $rekam_jejak_ketua . '%');
        }
        if ($proses_pengadaan) {
            $nip->where('proses_pengadaan', 'like', '%' . $proses_pengadaan . '%');
        }
        if ($tahap_peluang) {
            $nip->where('tahap_peluang', 'like', '%' . $tahap_peluang . '%');
        }
        if ($jenis_institusi_pemilik) {
            $nip->where('jenis_institusi_pemilik', 'like', '%' . $jenis_institusi_pemilik . '%');
        }
        if ($rekam_jejak_pemilik) {
            $nip->where('$rekam_jejak_pemilik', 'like', '%' . $rekam_jejak_pemilik . '%');
        }
        if ($perkiraan_nilai_proyek) {
            $nip->where('perkiraan_nilai_proyek', 'like', '%' . $perkiraan_nilai_proyek . '%');
        }
        if ($nilai_proyek) {
            $nip->where('nilai_proyek', 'like', '%' . $nilai_proyek . '%');
        }
        if ($status_profile) {
            $nip->where('status_profile', 'like', '%' . $status_profile . '%');
        }
        if ($file) {
            $nip->where('file', 'like', '%' . $file . '%');
        }
        if ($pemberi_kerja) {
            $nip->where('pemberi_kerja', 'like', '%' . $pemberi_kerja . '%');
        }
        if ($nama_tim) {
            $nip->where('nama_tim', 'like', '%' . $nama_tim . '%');
        }
        if ($penyelesaian) {
            $nip->where('penyelesaian', 'like', '%' . $penyelesaian . '%');
        }
        if ($status) {
            $nip->where('status', 'like', '%' . $status . '%');
        }
        if ($id_rekanan) {
            $nip->where('$id_rekanan', $id_rekanan);
        }
        if ($inputcv2) {
            $nip->where('inputcv2', 'like', '%' . $inputcv2 . '%');
        }
        if ($inputktp2) {
            $nip->where('inputktp2', 'like', '%' . $inputktp2 . '%');
        }
        if ($m_f) {
            $nip->where('m_f', 'like', '%' . $m_f . '%');
        }
        if ($data_kontrak) {
            $nip->where('data_kontrak', 'like', '%' . $data_kontrak . '%');
        }
        if ($bidang_profile) {
            $nip->where('bidang_profile', 'like', '%' . $bidang_profile . '%');
        }
        if ($inputnpwp2) {
            $nip->where('inputnpwp2', 'like', '%' . $inputnpwp2 . '%');
        }
        if ($inputijazah2) {
            $nip->where('inputijazah2', 'like', '%' . $inputijazah2 . '%');
        }
        if ($email_user) {
            $nip->where('email_user', $email_user);
        }
        if ($ket_pengelolaan) {
            $nip->where('ket_pengelolaan', 'like', '%' . $ket_pengelolaan . '%');
        }
        if ($klasifikasi_bumn) {
            $nip->where('klasifikasi_bumn', 'like', '%' . $klasifikasi_bumn . '%');
        }
        if ($subkon_nama) {
            $nip->where('subkon_nama', 'like', '%' . $subkon_nama . '%');
        }
        if ($berita_acara) {
            $nip->where('berita_acara', 'like', '%' . $berita_acara . '%');
        }
        if ($euro_matauang) {
            $nip->where('euro_matauang', 'like', '%' . $euro_matauang . '%');
        }
        if ($jpy_matauang) {
            $nip->where('jpy_matauang', 'like', '%' . $jpy_matauang . '%');
        }
        if ($dollar_matauang) {
            $nip->where('dollar_matauang', 'like', '%' . $dollar_matauang . '%');
        }
        if ($rupiah_matauang) {
            $nip->where('rupiah_matauang', 'like', '%' . $rupiah_matauang . '%');
        }
        if ($kode_akhir_periode) {
            $nip->where('kode_akhir_periode', 'like', '%' . $kode_akhir_periode . '%');
        }
        if ($tahapan_penagihan) {
            $nip->where('tahapan_penagihan', 'like', '%' . $tahapan_penagihan . '%');
        }
        if ($laporan) {
            $nip->where('laporan', 'like', '%' . $laporan . '%');
        }
        if ($no_data_kontrak) {
            $nip->where('no_data_kontrak', 'like', '%' . $no_data_kontrak . '%');
        }
        if ($akhir_waktu_datakontrak) {
            $nip->where('akhir_waktu_datakontrak', 'like', '%' . $akhir_waktu_datakontrak . '%');
        }
        if ($amandemen) {
            $nip->where('amandemen', 'like', '%' . $amandemen . '%');
        }
        if ($pembayaran) {
            $nip->where('pembayaran', 'like', '%' . $pembayaran . '%');
        }
        if ($kemajuan_proyek) {
            $nip->where('kemajuan_proyek', 'like', '%' . $kemajuan_proyek . '%');
        }
        if ($inputsalinansp3) {
            $nip->where('inputsalinansp3', 'like', '%' . $inputsalinansp3 . '%');
        }
        if ($inputsalinanikhtisar) {
            $nip->where('inputsalinanikhtisar', 'like', '%' . $inputsalinanikhtisar . '%');
        }
        if ($kode_klasifikasi) {
            $nip->where('kode_klasifikasi', 'like', '%' . $kode_klasifikasi . '%');
        }
        if ($catatanNego) {
            $nip->where('cata$catatanNego', 'like', '%' . $catatanNego . '%');
        }
        if ($id_formulir) {
            $nip->where('id_formulir', $id_formulir);
        }
        if ($tgl_datakontrak) {
            $nip->where('tgl_datakontrak', 'like', '%' . $tgl_datakontrak . '%');
        }
        if ($inputlaporanantara) {
            $nip->where('inputlaporanantara', 'like', '%' . $inputlaporanantara . '%');
        }
        if ($inputlaporanpendahuluan) {
            $nip->where('inputlaporanpendahuluan', 'like', '%' . $inputlaporanpendahuluan . '%');
        }
        if ($inputlaporanakhir) {
            $nip->where('inputlaporanakhir', 'like', '%' . $inputlaporanakhir . '%');
        }
        if ($inputlaporanantara2) {
            $nip->where('inputlaporanantara2', 'like', '%' . $inputlaporanantara2 . '%');
        }
        if ($inputlaporanpendahuluan2) {
            $nip->where('inputlaporanpendahuluan2', 'like', '%' . $inputlaporanpendahuluan2 . '%');
        }
        if ($inputlaporanakhir2) {
            $nip->where('inputlaporanakhir2', 'like', '%' . $inputlaporanakhir2 . '%');
        }
        if ($inputlaporanlainnya1) {
            $nip->where('inputlaporanlainnya1', 'like', '%' . $inputlaporanlainnya1 . '%');
        }
        if ($inputlaporanlainnya2) {
            $nip->where('inputlaporanlainnya2', 'like', '%' . $inputlaporanlainnya2 . '%');
        }
        if ($inputlaporanlainnya3) {
            $nip->where('inputlaporanlainnya3', 'like', '%' . $inputlaporanlainnya3 . '%');
        }
        if ($inputlaporanpenyelesaian) {
            $nip->where('inputlaporanpenyelesaian', 'like', '%' . $inputlaporanpenyelesaian . '%');
        }
        if ($inputlaporanpembayaran) {
            $nip->where('inputlaporanpembayaran', 'like', '%' . $inputlaporanpembayaran . '%');
        }
        if ($deskripsi_invoice) {
            $nip->where('deskripsi_invoice', 'like', '%' . $deskripsi_invoice . '%');
        }
        if ($tgl_amandemen) {
            $nip->where('tgl_amandemen', 'like', '%' . $tgl_amandemen . '%');
        }
        if ($scope_amandemen) {
            $nip->where('scope_amandemen', 'like', '%' . $scope_amandemen . '%');
        }
        if ($nilai_amandemen) {
            $nip->where('nilai_amandemen', 'like', '%' . $nilai_amandemen . '%');
        }
        if ($inputlaporankemajuan) {
            $nip->where('inputlaporankemajuan', 'like', '%' . $inputlaporankemajuan . '%');
        }
        if ($lp_tgl) {
            $nip->where('lp_tgl', 'like', '%' . $lp_tgl . '%');
        }
        if ($lp_kelengkapan) {
            $nip->where('lp_kelengkapan', 'like', '%' . $lp_kelengkapan . '%');
        }
        if ($lan_tanggal) {
            $nip->where('lan_tanggal', 'like', '%' . $lan_tanggal . '%');
        }
        if ($lan_keterangan) {
            $nip->where('lan_keterangan', 'like', '%' . $lan_keterangan . '%');
        }
        if ($lk_tanggal) {
            $nip->where('lk_tanggal', 'like', '%' . $lk_tanggal . '%');
        }
        if ($lak_tanggal) {
            $nip->where('lak_tanggal', 'like', '%' . $lak_tanggal . '%');
        }
        if ($laplain1_tanggal) {
            $nip->where('laplain1_tanggal', 'like', '%' . $laplain1_tanggal . '%');
        }
        if ($laplain2_tanggal) {
            $nip->where('laplain2_tanggal', 'like', '%' . $laplain2_tanggal . '%');
        }
        if ($laplain3_tanggal) {
            $nip->where('laplapin3_tanggal', 'like', '%' . $laplain3_tanggal . '%');
        }
        if ($lp_keterangan) {
            $nip->where('lp_keterangan', 'like', '%' . $lp_keterangan . '%');
        }
        if ($lan_kelengkapan) {
            $nip->where('lan_kelengkapan', 'like', '%' . $lan_kelengkapan . '%');
        }
        if ($lk_kelengkapan) {
            $nip->where('lk_kelengkapan', 'like', '%' . $lk_kelengkapan . '%');
        }
        if ($lak_kelengkapan) {
            $nip->where('lak_kelengkapan', 'like', '%' . $lak_kelengkapan . '%');
        }
        if ($laplain1_kelengkapan) {
            $nip->where('laplain1_kelengkapan', 'like', '%' . $laplain1_kelengkapan . '%');
        }
        if ($laplain2_kelengkapan) {
            $nip->where('laplain2_kelengkapan', 'like', '%' . $laplain2_kelengkapan . '%');
        }
        if ($laplain3_kelengkapan) {
            $nip->where('laplain3_kelengkapan', 'like', '%' . $laplain3_kelengkapan . '%');
        }
        if ($lan_keterangan) {
            $nip->where('lan_keterangan', 'like', '%' . $lan_keterangan . '%');
        }
        if ($lk_keterangan) {
            $nip->where('lk_keterangan', 'like', '%' . $lk_keterangan . '%');
        }
        if ($lak_keterangan) {
            $nip->where('lak_keterangan', 'like', '%' . $lak_keterangan . '%');
        }
        if ($laplain1_keterangan) {
            $nip->where('laplain1_keterangan', 'like', '%' . $laplain1_keterangan . '%');
        }
        if ($laplain2_keterangan) {
            $nip->where('laplain2_keterangan', 'like', '%' . $laplain2_keterangan . '%');
        }
        if ($laplain3_keterangan) {
            $nip->where('laplain3_keterangan', 'like', '%' . $laplain3_keterangan . '%');
        }
        if ($inputlaporanpendahuluan) {
            $nip->where('inputlaporanpendahuluan', 'like', '%' . $inputlaporanpendahuluan . '%');
        }
        if ($inputlaporankemajuan) {
            $nip->where('inputlaporankemajuan', 'like', '%' . $inputlaporankemajuan . '%');
        }
        if ($inputlaporanakhir) {
            $nip->where('inputlaporanakhir', 'like', '%' . $inputlaporanakhir . '%');
        }
        if ($inputlaporanlainnya1) {
            $nip->where('inputlaporanlainnya1', 'like', '%' . $inputlaporanlainnya1 . '%');
        }
        if ($inputlaporanlainnya2) {
            $nip->where('inputlaporanlainnya2', 'like', '%' . $inputlaporanlainnya2 . '%');
        }
        if ($inputlaporanlainnya3) {
            $nip->where('inputlaporanlainnya3', 'like', '%' . $inputlaporanlainnya3 . '%');
        }
        if ($inputlaporanantara) {
            $nip->where('inputlaporanantara', 'like', '%' . $inputlaporanantara . '%');
        }
        if ($adendum) {
            $nip->where('adendum', 'like', '%' . $adendum . '%');
        }
        if ($selesai) {
            $nip->where('selesai', 'like', '%' . $selesai . '%');
        }
        if ($catatan_selesai) {
            $nip->where('catatan_selesai', 'like', '%' . $catatan_selesai . '%');
        }
        if ($ket_gagal) {
            $nip->where('ket_gagal', 'like', '%' . $ket_gagal . '%');
        }

        return ResponseFormatter::success(
            $nip->paginate($limit),
            'Data NIP Berhasil diambil.'
        );
    }
}