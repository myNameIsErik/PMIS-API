<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Negosiasi;
use Illuminate\Http\Request;

class NegosiasiController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $inputdokumen = $request->input('inputdokumen');
        $judul_proyek_negosiasi = $request->input('judul_proyek_negosiasi');
        $rencana_nilai_proyek = $request->input('rencana_nilai_proyek');
        $keterangan = $request->input('keterangan');
        $catatan = $request->input('catatan');
        $email_user = $request->input('email_user');
        $id_formulir = $request->input('id_formulir');
        $statusNego = $request->input('statusNego');
        $catatanDireksi = $request->input('catatanDireksi');
        $status_profile = $request->input('status_profile');
        $ttd_sepihak = $request->input('ttd_sepihak');

        if ($id)
        {
            $negosiasi = Negosiasi::all()->find($id);

            if ($negosiasi) {
                return ResponseFormatter::success(
                    $negosiasi,
                    'Data Negosiasi Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Negosiasi Tidak Ada.',
                    404
                );
            }
        }

        $negosiasi = Negosiasi::all();

        if ($inputdokumen) {
            $negosiasi->where('inputdokumen', 'like', '%' . $inputdokumen . '%');
        }
        if ($judul_proyek_negosiasi) {
            $negosiasi->where('judul_proyek_negosiasi', 'like', '%' . $judul_proyek_negosiasi . '%');
        }
        if ($rencana_nilai_proyek) {
            $negosiasi->where('rencana_nilai_proyek', 'like', '%' . $rencana_nilai_proyek . '%');
        }
        if ($keterangan) {
            $negosiasi->where('keterangan', 'like', '%' . $keterangan . '%');
        }
        if ($catatan) {
            $negosiasi->where('catatan', 'like', '%' . $catatan . '%');
        }
        if ($email_user) {
            $negosiasi->where('email_user', $email_user);
        }
        if ($id_formulir) {
            $negosiasi->where('id_formulir', 'like', '%' . $id_formulir . '%');
        }
        if ($statusNego) {
            $negosiasi->where('statusNego', 'like', '%' . $statusNego . '%');
        }
        if ($catatanDireksi) {
            $negosiasi->where('catatanDireksi', 'like', '%' . $catatanDireksi . '%');
        }
        if ($status_profile) {
            $negosiasi->where('status_profile', 'like', '%' . $status_profile . '%');
        }
        if ($ttd_sepihak) {
            $negosiasi->where('ttd_sepihak', 'like', '%' . $ttd_sepihak . '%');
        }

        return ResponseFormatter::success(
            $negosiasi,
            'Data Negosiasi Berhasil diambil.'
        );
    }
}
