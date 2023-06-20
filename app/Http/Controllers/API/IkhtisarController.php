<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Ikhtisar;
use Illuminate\Http\Request;

class IkhtisarController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $nip = $request->input('nip');
        $metode_ppbj = $request->input('metode_ppbj');
        $tgl_kontrak_ikhtisar = $request->input('tgl_kontrak_ikhtisar');
        $lingkup_proyek = $request->input('lingkup_proyek');
        $nilai_kontrak = $request->input('nilai_kontrak');
        $jangka_waktu_kontrak = $request->input('jangka_waktu_kontrak');
        $mulai_periode_konrtrak = $request->input('mulai_periode_konrtrak');
        $awal_waktu_kontrak = $request->input('awal_waktu_kontrak');
        $akhir_waktu_kontrak = $request->input('akhir_waktu_kontrak');
        $tgl_selesai_proyek_kontrak = $request->input('tgl_selesai_proyek_kontrak');
        $tgl_selesai_proyek_beritaacara = $request->input('tgl_selesai_proyek_beritaacara');
        $jumlah_perubahan = $request->input('jumlah_perubahan');
        $perubahan_lingkup = $request->input('perubahan_lingkup');
        $perubahan_waktu = $request->input('perubahan_waktu');
        $perubahan_biaya = $request->input('perubahan_biaya');
        $lokasi_proyek_ikhtisar = $request->input('lokasi_proyek_ikhtisar');
        $nama_penandatanganan_kontrak = $request->input('nama_penandatanganan_kontrak');
        $telpon_penandatanganan_kontrak = $request->input('telpon_penandatanganan_kontrak');
        $email_penandatanganan_kontrak = $request->input('email_penandatanganan_kontrak');
        $nama_manajer = $request->input('nama_manajer');
        $telpon_manajer = $request->input('telpon_manajer');
        $email_manajer = $request->input('email_manajer');
        $nama_administrator = $request->input('nama_administrator');
        $telpon_administrator = $request->input('telpon_administrator');
        $email_administrator = $request->input('email_administrator');
        $nama_institusi_pemilik = $request->input('nama_institusi_pemilik');
        $alamat_institusi_pemilik = $request->input('alamat_institusi_pemilik');
        $jenis_institusi_pemilik_ikhtisar = $request->input('jenis_institusi_pemilik_ikhtisar');
        $nama_pejabat_pembuat_komitmen = $request->input('nama_pejabat_pembuat_komitmen');
        $telpon_pejabat_pembuat_komitmen = $request->input('telpon_pejabat_pembuat_komitmen');
        $email_pejabat_pembuat_komitmen = $request->input('email_pejabat_pembuat_komitmen');
        $nama_pengguna = $request->input('nama_pengguna');
        $telepon_pengguna = $request->input('telepon_pengguna');
        $email_pengguna = $request->input('email_pengguna');
        $nama_keuangan = $request->input('nama_keuangan');
        $telepon_keuangan = $request->input('telepon_keuangan');
        $email_keuangan = $request->input('email_keuangan');
        $nama_penanggungjawab_pelaksana = $request->input('nama_penanggungjawab_pelaksana');
        $telpon_penanggungjawab_pelaksana = $request->input('telpon_penanggungjawab_pelaksana');
        $email_penanggungjawab_pelaksana = $request->input('email_penanggungjawab_pelaksana');
        $nama_ketuatim_pelaksana = $request->input('nama_ketuatim_pelaksana');
        $telpon_ketuatim_pelaksana = $request->input('telpon_ketuatim_pelaksana');
        $email_ketuatim_pelaksana = $request->input('email_ketuatim_pelaksana');
        $nama_narahubung_pelaksana = $request->input('nama_narahubung_pelaksana');
        $telpon_narahubung_pelaksana = $request->input('telpon_narahubung_pelaksana');
        $email_narahubung_pelaksana = $request->input('email_narahubung_pelaksana');
        $posisi_tenaga_ahli1 = $request->input('posisi_tenaga_ahli1');
        $nama_tenaga_ahli1 = $request->input('nama_tenaga_ahli1');
        $status_tenaga_ahli1 = $request->input('status_tenaga_ahli1');
        $posisi_tenaga_ahli2 = $request->input('posisi_tenaga_ahli2');
        $nama_tenaga_ahli2 = $request->input('nama_tenaga_ahli2');
        $status_tenaga_ahli2 = $request->input('status_tenaga_ahli2');
        $posisi_tenaga_ahli3 = $request->input('posisi_tenaga_ahli3');
        $nama_tenaga_ahli3 = $request->input('nama_tenaga_ahli3');
        $status_tenaga_ahli3 = $request->input('status_tenaga_ahli3');
        $posisi_tenaga_ahli4 = $request->input('posisi_tenaga_ahli4');
        $nama_tenaga_ahli4 = $request->input('nama_tenaga_ahli4');
        $status_tenaga_ahli4 = $request->input('status_tenaga_ahli4');
        $posisi_tenaga_ahli5 = $request->input('posisi_tenaga_ahli5');
        $nama_tenaga_ahli5 = $request->input('nama_tenaga_ahli5');
        $status_tenaga_ahli5 = $request->input('status_tenaga_ahli5');
        $posisi_tenaga_ahli6 = $request->input('posisi_tenaga_ahli6');
        $nama_tenaga_ahli6 = $request->input('nama_tenaga_ahli6');
        $status_tenaga_ahli6 = $request->input('status_tenaga_ahli6');
        $jumlah_tenaga_ahli_asing = $request->input('jumlah_tenaga_ahli_asing');
        $jumlah_tenaga_ahli_asing1 = $request->input('jumlah_tenaga_ahli_asing1');
        $jumlah_tenaga_ahli_asing2 = $request->input('jumlah_tenaga_ahli_asing2');
        $jumlah_tenaga_ahli_asing3 = $request->input('jumlah_tenaga_ahli_asing3');
        $jumlah_tenaga_ahli_asing4 = $request->input('jumlah_tenaga_ahli_asing4');
        $jumlah_tenaga_ahli_asing5 = $request->input('jumlah_tenaga_ahli_asing5');
        $jumlah_tenaga_ahli_asing6 = $request->input('jumlah_tenaga_ahli_asing6');
        $jumlah_tenaga_ahli_indonesia = $request->input('jumlah_tenaga_ahli_indonesia');
        $jumlah_tenaga_ahli_indonesia1 = $request->input('jumlah_tenaga_ahli_indonesia1');
        $jumlah_tenaga_ahli_indonesia2 = $request->input('jumlah_tenaga_ahli_indonesia2');
        $jumlah_tenaga_ahli_indonesia3 = $request->input('jumlah_tenaga_ahli_indonesia3');
        $jumlah_tenaga_ahli_indonesia4 = $request->input('jumlah_tenaga_ahli_indonesia4');
        $jumlah_tenaga_ahli_indonesia5 = $request->input('jumlah_tenaga_ahli_indonesia5');
        $jumlah_tenaga_ahli_indonesia6 = $request->input('jumlah_tenaga_ahli_indonesia6');
        $ttd_project_manager = $request->input('ttd_project_manager');
        $ttd_manajer_pu = $request->input('ttd_manajer_pu');
        $ttd_direktur = $request->input('ttd_direktur');
        $id_formulir = $request->input('id_formulir');
        $nilai_proyek = $request->input('nilai_proyek');

        if ($id)
        {
            $ikhtisar = Ikhtisar::all()->find($id);

            if ($ikhtisar) {
                return ResponseFormatter::success(
                    $ikhtisar,
                    'Data Ikhtisar Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Ikhtisar Tidak Ada.',
                    404
                );
            }
        }

        $ikhtisar = Ikhtisar::all();

        if ($nip) {
            $ikhtisar->where('nip', 'like', '%' . $nip . '%');
        }
        if ($metode_ppbj) {
            $ikhtisar->where('metode_ppbj', 'like', '%' . $metode_ppbj . '%');
        }
        if ($tgl_kontrak_ikhtisar) {
            $ikhtisar->where('tgl_kontrak_ikhtisar', 'like', '%' . $tgl_kontrak_ikhtisar . '%');
        }
        if ($lingkup_proyek) {
            $ikhtisar->where('lingkup_proyek', 'like', '%' . $lingkup_proyek . '%');
        }
        if ($nilai_kontrak) {
            $ikhtisar->where('nilai_kontrak', 'like', '%' . $nilai_kontrak . '%');
        }
        if ($jangka_waktu_kontrak) {
            $ikhtisar->where('jangka_waktu_kontrak', 'like', '%' . $jangka_waktu_kontrak . '%');
        }
        if ($mulai_periode_konrtrak) {
            $ikhtisar->where('mulai_periode_konrtrak', 'like', '%' . $mulai_periode_konrtrak . '%');
        }
        if ($awal_waktu_kontrak) {
            $ikhtisar->where('awal_waktu_kontrak', 'like', '%' . $awal_waktu_kontrak . '%');
        }
        if ($akhir_waktu_kontrak) {
            $ikhtisar->where('akhir_waktu_kontrak', 'like', '%' . $akhir_waktu_kontrak . '%');
        }
        if ($tgl_selesai_proyek_kontrak) {
            $ikhtisar->where('tgl_selesai_proyek_kontrak', 'like', '%' . $tgl_selesai_proyek_kontrak . '%');
        }
        if ($tgl_selesai_proyek_beritaacara) {
            $ikhtisar->where('tgl_selesai_proyek_beritaacara', 'like', '%' . $tgl_selesai_proyek_beritaacara . '%');
        }
        if ($jumlah_perubahan) {
            $ikhtisar->where('jumlah_perubahan', 'like', '%' . $jumlah_perubahan . '%');
        }
        if ($perubahan_lingkup) {
            $ikhtisar->where('perubahan_lingkup', 'like', '%' . $perubahan_lingkup . '%');
        }
        if ($perubahan_waktu) {
            $ikhtisar->where('perubahan_waktu', 'like', '%' . $perubahan_waktu . '%');
        }
        if ($perubahan_biaya) {
            $ikhtisar->where('perubahan_biaya', 'like', '%' . $perubahan_biaya . '%');
        }
        if ($lokasi_proyek_ikhtisar) {
            $ikhtisar->where('lokasi_proyek_ikhtisar', 'like', '%' . $lokasi_proyek_ikhtisar . '%');
        }
        if ($nama_penandatanganan_kontrak) {
            $ikhtisar->where('nama_penandatanganan_kontrak', 'like', '%' . $nama_penandatanganan_kontrak . '%');
        }
        if ($telpon_penandatanganan_kontrak) {
            $ikhtisar->where('telpon_penandatanganan_kontrak', 'like', '%' . $telpon_penandatanganan_kontrak . '%');
        }
        if ($email_penandatanganan_kontrak) {
            $ikhtisar->where('email_penandatanganan_kontrak', 'like', '%' . $email_penandatanganan_kontrak . '%');
        }
        if ($nama_manajer) {
            $ikhtisar->where('nama_manajer', 'like', '%' . $nama_manajer . '%');
        }
        if ($telpon_manajer) {
            $ikhtisar->where('telpon_manajer', 'like', '%' . $telpon_manajer . '%');
        }
        if ($email_manajer) {
            $ikhtisar->where('email_manajer', 'like', '%' . $email_manajer . '%');
        }
        if ($nama_administrator) {
            $ikhtisar->where('nama_administrator', 'like', '%' . $nama_administrator . '%');
        }
        if ($telpon_administrator) {
            $ikhtisar->where('telpon_administrator', 'like', '%' . $telpon_administrator . '%');
        }
        if ($email_administrator) {
            $ikhtisar->where('email_administrator', 'like', '%' . $email_administrator . '%');
        }
        if ($nama_institusi_pemilik) {
            $ikhtisar->where('nama_institusi_pemilik', 'like', '%' . $nama_institusi_pemilik . '%');
        }
        if ($alamat_institusi_pemilik) {
            $ikhtisar->where('alamat_institusi_pemilik', 'like', '%' . $alamat_institusi_pemilik . '%');
        }
        if ($jenis_institusi_pemilik_ikhtisar) {
            $ikhtisar->where('jenis_institusi_pemilik_ikhtisar', 'like', '%' . $jenis_institusi_pemilik_ikhtisar . '%');
        }
        if ($nama_pejabat_pembuat_komitmen) {
            $ikhtisar->where('nama_pejabat_pembuat_komitmen', 'like', '%' . $nama_pejabat_pembuat_komitmen . '%');
        }
        if ($telpon_pejabat_pembuat_komitmen) {
            $ikhtisar->where('telpon_pejabat_pembuat_komitmen', 'like', '%' . $telpon_pejabat_pembuat_komitmen . '%');
        }
        if ($email_pejabat_pembuat_komitmen) {
            $ikhtisar->where('email_pejabat_pembuat_komitmen', 'like', '%' . $email_pejabat_pembuat_komitmen . '%');
        }
        if ($nama_pengguna) {
            $ikhtisar->where('nama_pengguna', 'like', '%' . $nama_pengguna . '%');
        }
        if ($telepon_pengguna) {
            $ikhtisar->where('telepon_pengguna', 'like', '%' . $telepon_pengguna . '%');
        }
        if ($email_pengguna) {
            $ikhtisar->where('email_pengguna', 'like', '%' . $email_pengguna . '%');
        }
        if ($nama_keuangan) {
            $ikhtisar->where('nama_keuangan', 'like', '%' . $nama_keuangan . '%');
        }
        if ($telepon_keuangan) {
            $ikhtisar->where('telepon_keuangan', 'like', '%' . $telepon_keuangan . '%');
        }
        if ($email_keuangan) {
            $ikhtisar->where('email_keuangan', 'like', '%' . $email_keuangan . '%');
        }
        if ($nama_penanggungjawab_pelaksana) {
            $ikhtisar->where('nama_penanggungjawab_pelaksana', 'like', '%' . $nama_penanggungjawab_pelaksana . '%');
        }
        if ($telpon_penanggungjawab_pelaksana) {
            $ikhtisar->where('telpon_penanggungjawab_pelaksana', 'like', '%' . $telpon_penanggungjawab_pelaksana . '%');
        }
        if ($email_penanggungjawab_pelaksana) {
            $ikhtisar->where('email_penanggungjawab_pelaksana', 'like', '%' . $email_penanggungjawab_pelaksana . '%');
        }
        if ($nama_ketuatim_pelaksana) {
            $ikhtisar->where('nama_ketuatim_pelaksana', 'like', '%' . $nama_ketuatim_pelaksana . '%');
        }
        if ($telpon_ketuatim_pelaksana) {
            $ikhtisar->where('telpon_ketuatim_pelaksana', 'like', '%' . $telpon_ketuatim_pelaksana . '%');
        }
        if ($email_ketuatim_pelaksana) {
            $ikhtisar->where('email_ketuatim_pelaksana', 'like', '%' . $email_ketuatim_pelaksana . '%');
        }
        if ($nama_narahubung_pelaksana) {
            $ikhtisar->where('nama_narahubung_pelaksana', 'like', '%' . $nama_narahubung_pelaksana . '%');
        }
        if ($telpon_narahubung_pelaksana) {
            $ikhtisar->where('telpon_narahubung_pelaksana', 'like', '%' . $telpon_narahubung_pelaksana . '%');
        }
        if ($email_narahubung_pelaksana) {
            $ikhtisar->where('email_narahubung_pelaksana', 'like', '%' . $email_narahubung_pelaksana . '%');
        }
        if ($posisi_tenaga_ahli1) {
            $ikhtisar->where('posisi_tenaga_ahli1', 'like', '%' . $posisi_tenaga_ahli1 . '%');
        }
        if ($nama_tenaga_ahli1) {
            $ikhtisar->where('nama_tenaga_ahli1', 'like', '%' . $nama_tenaga_ahli1 . '%');
        }
        if ($status_tenaga_ahli1) {
            $ikhtisar->where('status_tenaga_ahli1', 'like', '%' . $status_tenaga_ahli1 . '%');
        }
        if ($posisi_tenaga_ahli2) {
            $ikhtisar->where('posisi_tenaga_ahli2', 'like', '%' . $posisi_tenaga_ahli2 . '%');
        }
        if ($nama_tenaga_ahli2) {
            $ikhtisar->where('nama_tenaga_ahli2', 'like', '%' . $nama_tenaga_ahli2 . '%');
        }
        if ($status_tenaga_ahli2) {
            $ikhtisar->where('status_tenaga_ahli2', 'like', '%' . $status_tenaga_ahli2 . '%');
        }
        if ($posisi_tenaga_ahli3) {
            $ikhtisar->where('posisi_tenaga_ahli3', 'like', '%' . $posisi_tenaga_ahli3 . '%');
        }
        if ($nama_tenaga_ahli3) {
            $ikhtisar->where('nama_tenaga_ahli3', 'like', '%' . $nama_tenaga_ahli3 . '%');
        }
        if ($status_tenaga_ahli3) {
            $ikhtisar->where('status_tenaga_ahli3', 'like', '%' . $status_tenaga_ahli3 . '%');
        }
        if ($posisi_tenaga_ahli4) {
            $ikhtisar->where('posisi_tenaga_ahli4', 'like', '%' . $posisi_tenaga_ahli4 . '%');
        }
        if ($nama_tenaga_ahli4) {
            $ikhtisar->where('nama_tenaga_ahli4', 'like', '%' . $nama_tenaga_ahli4 . '%');
        }
        if ($status_tenaga_ahli4) {
            $ikhtisar->where('status_tenaga_ahli4', 'like', '%' . $status_tenaga_ahli4 . '%');
        }
        if ($posisi_tenaga_ahli5) {
            $ikhtisar->where('posisi_tenaga_ahli5', 'like', '%' . $posisi_tenaga_ahli5 . '%');
        }
        if ($nama_tenaga_ahli5) {
            $ikhtisar->where('nama_tenaga_ahli5', 'like', '%' . $nama_tenaga_ahli5 . '%');
        }
        if ($status_tenaga_ahli5) {
            $ikhtisar->where('status_tenaga_ahli5', 'like', '%' . $status_tenaga_ahli5 . '%');
        }
        if ($posisi_tenaga_ahli6) {
            $ikhtisar->where('posisi_tenaga_ahli6', 'like', '%' . $posisi_tenaga_ahli6 . '%');
        }
        if ($nama_tenaga_ahli6) {
            $ikhtisar->where('nama_tenaga_ahli6', 'like', '%' . $nama_tenaga_ahli6 . '%');
        }
        if ($status_tenaga_ahli6) {
            $ikhtisar->where('status_tenaga_ahli6', 'like', '%' . $status_tenaga_ahli6 . '%');
        }
        if ($jumlah_tenaga_ahli_asing) {
            $ikhtisar->where('jumlah_tenaga_ahli_asing', 'like', '%' . $jumlah_tenaga_ahli_asing . '%');
        }
        if ($jumlah_tenaga_ahli_asing1) {
            $ikhtisar->where('jumlah_tenaga_ahli_asing1', 'like', '%' . $jumlah_tenaga_ahli_asing1 . '%');
        }
        if ($jumlah_tenaga_ahli_asing2) {
            $ikhtisar->where('jumlah_tenaga_ahli_asing2', 'like', '%' . $jumlah_tenaga_ahli_asing2 . '%');
        }
        if ($jumlah_tenaga_ahli_asing3) {
            $ikhtisar->where('jumlah_tenaga_ahli_asing3', 'like', '%' . $jumlah_tenaga_ahli_asing3 . '%');
        }
        if ($jumlah_tenaga_ahli_asing4) {
            $ikhtisar->where('jumlah_tenaga_ahli_asing4', 'like', '%' . $jumlah_tenaga_ahli_asing4 . '%');
        }
        if ($jumlah_tenaga_ahli_asing5) {
            $ikhtisar->where('jumlah_tenaga_ahli_asing5', 'like', '%' . $jumlah_tenaga_ahli_asing5 . '%');
        }
        if ($jumlah_tenaga_ahli_asing6) {
            $ikhtisar->where('jumlah_tenaga_ahli_asing6', 'like', '%' . $jumlah_tenaga_ahli_asing6 . '%');
        }
        if ($jumlah_tenaga_ahli_indonesia) {
            $ikhtisar->where('jumlah_tenaga_ahli_indonesia', 'like', '%' . $jumlah_tenaga_ahli_indonesia . '%');
        }
        if ($jumlah_tenaga_ahli_indonesia1) {
            $ikhtisar->where('jumlah_tenaga_ahli_indonesia1', 'like', '%' . $jumlah_tenaga_ahli_indonesia1 . '%');
        }
        if ($jumlah_tenaga_ahli_indonesia2) {
            $ikhtisar->where('jumlah_tenaga_ahli_indonesia2', 'like', '%' . $jumlah_tenaga_ahli_indonesia2 . '%');
        }
        if ($jumlah_tenaga_ahli_indonesia3) {
            $ikhtisar->where('jumlah_tenaga_ahli_indonesia3', 'like', '%' . $jumlah_tenaga_ahli_indonesia3 . '%');
        }
        if ($jumlah_tenaga_ahli_indonesia4) {
            $ikhtisar->where('jumlah_tenaga_ahli_indonesia4', 'like', '%' . $jumlah_tenaga_ahli_indonesia4 . '%');
        }
        if ($jumlah_tenaga_ahli_indonesia5) {
            $ikhtisar->where('jumlah_tenaga_ahli_indonesia5', 'like', '%' . $jumlah_tenaga_ahli_indonesia5 . '%');
        }
        if ($jumlah_tenaga_ahli_indonesia6) {
            $ikhtisar->where('jumlah_tenaga_ahli_indonesia6', 'like', '%' . $jumlah_tenaga_ahli_indonesia6 . '%');
        }
        if ($ttd_project_manager) {
            $ikhtisar->where('ttd_project_manager', 'like', '%' . $ttd_project_manager . '%');
        }
        if ($ttd_manajer_pu) {
            $ikhtisar->where('ttd_manajer_pu', 'like', '%' . $ttd_manajer_pu . '%');
        }
        if ($ttd_direktur) {
            $ikhtisar->where('ttd_direktur', 'like', '%' . $ttd_direktur . '%');
        }
        if ($id_formulir) {
            $ikhtisar->where('id_formulir', 'like', '%' . $id_formulir . '%');
        }
        if ($nilai_proyek) {
            $ikhtisar->where('nilai_proyek', 'like', '%' . $nilai_proyek . '%');
        }

        return ResponseFormatter::success(
            $ikhtisar,
            'Data Ikhtisar Berhasil diambil.'
        );
    }
}
