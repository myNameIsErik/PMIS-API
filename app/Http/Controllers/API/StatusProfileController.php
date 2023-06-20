<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\StatusProfile;
use Illuminate\Http\Request;

class StatusProfileController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $judul_proyek = $request->input('judul_proyek');
        $status_proyek = $request->input('status_proyek');
        $rencana_kerja = $request->input('rencana_kerja');
        $kelas_dokumen = $request->input('kelas_dokumen');
        $lokasi_proyek = $request->input('lokasi_proyek');
        $inputgambarlokasi = $request->input('inputgambarlokasi');
        $tujuan_proyek = $request->input('tujuan_proyek');
        $luas_lahan = $request->input('luas_lahan');
        $nilai_proyek = $request->input('nilai_proyek');
        $model_bisnis = $request->input('model_bisnis');
        $faktor_sukses = $request->input('faktor_sukses');
        $key_performance = $request->input('key_performance');
        $risiko = $request->input('risiko');
        $mitigasi = $request->input('mitigasi');
        $inputdokumentasi = $request->input('inputdokumentasi');
        $inputlaporanpendahuluan = $request->input('inputlaporanpendahuluan');
        $inputlaporanantara = $request->input('inputlaporanantara');
        $inputlaporanakhir = $request->input('inputlaporanakhir');
        $inputexecutivesummary = $request->input('inputexecutivesummary');
        $jadwalpelaksanaan = $request->input('jadwalpelaksanaan');
        $tenaga_ahli = $request->input('tenaga_ahli');
        $nama_tenaga_ahli = $request->input('nama_tenaga_ahli');
        $tenaga_ahli = $request->input('tenaga_ahli');
        $nama_tenaga_ahli = $request->input('nama_tenaga_ahli');
        $tenaga_ahli2 = $request->input('tenaga_ahli2');
        $nama_tenaga_ahli2 = $request->input('nama_tenaga_ahli2');
        $tenaga_ahli3 = $request->input('tenaga_ahli3');
        $nama_tenaga_ahli3 = $request->input('nama_tenaga_ahli3');
        $tenaga_ahli4 = $request->input('tenaga_ahli4');
        $nama_tenaga_ahli4 = $request->input('nama_tenaga_ahli4');
        $tenaga_ahli5 = $request->input('tenaga_ahli5');
        $nama_tenaga_ahli5 = $request->input('nama_tenaga_ahli5');
        $tenaga_ahli6 = $request->input('tenaga_ahli6');
        $nama_tenaga_ahli6 = $request->input('nama_tenaga_ahli6');
        $tenaga_ahli7 = $request->input('tenaga_ahli7');
        $nama_tenaga_ahli7 = $request->input('nama_tenaga_ahli7');
        $tenaga_ahli8 = $request->input('tenaga_ahli8');
        $nama_tenaga_ahli8 = $request->input('nama_tenaga_ahli8');
        $tenaga_ahli9 = $request->input('tenaga_ahli9');
        $nama_tenaga_ahli9 = $request->input('nama_tenaga_ahli9');
        $tenaga_ahli10 = $request->input('tenaga_ahli10');
        $nama_tenaga_ahli10 = $request->input('nama_tenaga_ahli10');
        $tenaga_ahli11 = $request->input('tenaga_ahli11');
        $nama_tenaga_ahli11 = $request->input('nama_tenaga_ahli11');
        $tenaga_ahli12 = $request->input('tenaga_ahli12');
        $nama_tenaga_ahli12 = $request->input('nama_tenaga_ahli12');
        $tenaga_ahli13 = $request->input('tenaga_ahli13');
        $nama_tenaga_ahli13 = $request->input('nama_tenaga_ahli13');
        $inputdokumentasi2 = $request->input('inputdokumentasi2');
        $inputlaporanpendahuluan2 = $request->input('inputlaporanpendahuluan2');
        $inputlaporanantara2 = $request->input('inputlaporanantara2');
        $inputlaporanakhir2 = $request->input('inputlaporanakhir2');
        $inputexecutivesummary2 = $request->input('inputexecutivesummary2');
        $email_user = $request->input('email_user');
        $id_formulir = $request->input('id_formulir');

        if ($id)
        {
            $status_profile = StatusProfile::all()->find($id);

            if ($status_profile) {
                return ResponseFormatter::success(
                    $status_profile,
                    'Data Status Profile Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Status Profile Tidak Ada.',
                    404
                );
            }
        }

        $status_profile = StatusProfile::all();

        if ($judul_proyek) {
            $status_profile->where('judul_proyek', 'like', '%' . $judul_proyek . '%');
        }
        if ($status_proyek) {
            $status_profile->where('status_proyek', 'like', '%' . $status_proyek . '%');
        }
        if ($rencana_kerja) {
            $status_profile->where('rencana_kerja', 'like', '%' . $rencana_kerja . '%');
        }
        if ($kelas_dokumen) {
            $status_profile->where('kelas_dokumen', 'like', '%' . $kelas_dokumen . '%');
        }
        if ($lokasi_proyek) {
            $status_profile->where('lokasi_proyek', 'like', '%' . $lokasi_proyek . '%');
        }
        if ($inputgambarlokasi) {
            $status_profile->where('inputgambarlokasi', 'like', '%' . $inputgambarlokasi . '%');
        }
        if ($tujuan_proyek) {
            $status_profile->where('tujuan_proyek', 'like', '%' . $tujuan_proyek . '%');
        }
        if ($luas_lahan) {
            $status_profile->where('luas_lahan', $luas_lahan);
        }
        if ($nilai_proyek) {
            $status_profile->where('nilai_proyek', 'like', '%' . $nilai_proyek . '%');
        }
        if ($model_bisnis) {
            $status_profile->where('model_bisnis', 'like', '%' . $model_bisnis . '%');
        }
        if ($faktor_sukses) {
            $status_profile->where('faktor_sukses', 'like', '%' . $faktor_sukses . '%');
        }
        if ($key_performance) {
            $status_profile->where('key_performance', 'like', '%' . $key_performance . '%');
        }
        if ($risiko) {
            $status_profile->where('risiko', 'like', '%' . $risiko . '%');
        }
        if ($mitigasi) {
            $status_profile->where('mitigasi', 'like', '%' . $mitigasi . '%');
        }
        if ($inputdokumentasi) {
            $status_profile->where('inputdokumentasi', 'like', '%' . $inputdokumentasi . '%');
        }
        if ($inputlaporanpendahuluan) {
            $status_profile->where('inputlaporanpendahuluan', 'like', '%' . $inputlaporanpendahuluan . '%');
        }
        if ($inputlaporanantara) {
            $status_profile->where('inputlaporanantara', 'like', '%' . $inputlaporanantara . '%');
        }
        if ($inputlaporanakhir) {
            $status_profile->where('inputlaporanakhir', 'like', '%' . $inputlaporanakhir . '%');
        }
        if ($inputexecutivesummary) {
            $status_profile->where('inputexecutivesummary', 'like', '%' . $inputexecutivesummary . '%');
        }
        if ($jadwalpelaksanaan) {
            $status_profile->where('jadwalpelaksanaan', 'like', '%' . $jadwalpelaksanaan . '%');
        }
        if ($tenaga_ahli) {
            $status_profile->where('tenaga_ahli', 'like', '%' . $tenaga_ahli . '%');
        }
        if ($nama_tenaga_ahli) {
            $status_profile->where('nama_tenaga_ahli', 'like', '%' . $nama_tenaga_ahli . '%');
        }
        if ($tenaga_ahli2) {
            $status_profile->where('tenaga_ahli2', 'like', '%' . $tenaga_ahli2 . '%');
        }
        if ($nama_tenaga_ahli2) {
            $status_profile->where('nama_tenaga_ahli2', 'like', '%' . $nama_tenaga_ahli2 . '%');
        }
        if ($tenaga_ahli3) {
            $status_profile->where('tenaga_ahli3', 'like', '%' . $tenaga_ahli3 . '%');
        }
        if ($nama_tenaga_ahli3) {
            $status_profile->where('nama_tenaga_ahli3', 'like', '%' . $nama_tenaga_ahli3 . '%');
        }
        if ($tenaga_ahli4) {
            $status_profile->where('tenaga_ahli4', 'like', '%' . $tenaga_ahli4 . '%');
        }
        if ($nama_tenaga_ahli4) {
            $status_profile->where('nama_tenaga_ahli4', 'like', '%' . $nama_tenaga_ahli4 . '%');
        }
        if ($tenaga_ahli5) {
            $status_profile->where('tenaga_ahli5', 'like', '%' . $tenaga_ahli5 . '%');
        }
        if ($nama_tenaga_ahli5) {
            $status_profile->where('nama_tenaga_ahli5', 'like', '%' . $nama_tenaga_ahli5 . '%');
        }
        if ($tenaga_ahli6) {
            $status_profile->where('tenaga_ahli6', 'like', '%' . $tenaga_ahli6 . '%');
        }
        if ($nama_tenaga_ahli6) {
            $status_profile->where('nama_tenaga_ahli6', 'like', '%' . $nama_tenaga_ahli6 . '%');
        }
        if ($tenaga_ahli7) {
            $status_profile->where('tenaga_ahli7', 'like', '%' . $tenaga_ahli7 . '%');
        }
        if ($nama_tenaga_ahli7) {
            $status_profile->where('nama_tenaga_ahli7', 'like', '%' . $nama_tenaga_ahli7 . '%');
        }
        if ($tenaga_ahli8) {
            $status_profile->where('tenaga_ahli8', 'like', '%' . $tenaga_ahli8 . '%');
        }
        if ($nama_tenaga_ahli8) {
            $status_profile->where('nama_tenaga_ahli8', 'like', '%' . $nama_tenaga_ahli8 . '%');
        }
        if ($tenaga_ahli9) {
            $status_profile->where('tenaga_ahli9', 'like', '%' . $tenaga_ahli9 . '%');
        }
        if ($nama_tenaga_ahli9) {
            $status_profile->where('nama_tenaga_ahli9', 'like', '%' . $nama_tenaga_ahli9 . '%');
        }
        if ($tenaga_ahli10) {
            $status_profile->where('tenaga_ahli10', 'like', '%' . $tenaga_ahli10 . '%');
        }
        if ($nama_tenaga_ahli10) {
            $status_profile->where('nama_tenaga_ahli10', 'like', '%' . $nama_tenaga_ahli10 . '%');
        }
        if ($tenaga_ahli11) {
            $status_profile->where('tenaga_ahli11', 'like', '%' . $tenaga_ahli11 . '%');
        }
        if ($nama_tenaga_ahli11) {
            $status_profile->where('nama_tenaga_ahli11', 'like', '%' . $nama_tenaga_ahli11 . '%');
        }
        if ($tenaga_ahli12) {
            $status_profile->where('tenaga_ahli12', 'like', '%' . $tenaga_ahli12 . '%');
        }
        if ($nama_tenaga_ahli12) {
            $status_profile->where('nama_tenaga_ahli12', 'like', '%' . $nama_tenaga_ahli12 . '%');
        }
        if ($tenaga_ahli13) {
            $status_profile->where('tenaga_ahli13', 'like', '%' . $tenaga_ahli13 . '%');
        }
        if ($nama_tenaga_ahli13) {
            $status_profile->where('nama_tenaga_ahli13', 'like', '%' . $nama_tenaga_ahli13 . '%');
        }
        if ($inputdokumentasi2) {
            $status_profile->where('inputdokumentasi2', 'like', '%' . $inputdokumentasi2 . '%');
        }
        if ($inputlaporanpendahuluan2) {
            $status_profile->where('inputlaporanpendahuluan2', 'like', '%' . $inputlaporanpendahuluan2 . '%');
        }
        if ($inputlaporanantara2) {
            $status_profile->where('inputlaporanantara2', 'like', '%' . $inputlaporanantara2 . '%');
        }
        if ($inputlaporanakhir2) {
            $status_profile->where('inputlaporanakhir2', 'like', '%' . $inputlaporanakhir2 . '%');
        }
        if ($inputexecutivesummary2) {
            $status_profile->where('inputexecutivesummary2', 'like', '%' . $inputexecutivesummary2 . '%');
        }
        if ($email_user) {
            $status_profile->where('email_user', 'like', '%' . $email_user . '%');
        }
        if ($id_formulir) {
            $status_profile->where('id_formulir', 'like', '%' . $id_formulir . '%');
        }

        return ResponseFormatter::success(
            $status_profile,
            'Data Status Profile Berhasil diambil.'
        );
    }
}
