<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\SuratSPPP;
use Illuminate\Http\Request;

class SuratSP3Controller extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $pin = $request->input('pin');
        $no_surat = $request->input('no_surat');
        $tanggal = $request->input('tanggal');
        $pihak_pertama = $request->input('pihak_pertama');
        $jabatan = $request->input('jabatan');
        $pihak_kedua = $request->input('pihak_kedua');
        $nama_proyek = $request->input('nama_proyek');
        $pemilik_proyek = $request->input('pemilik_proyek');
        $periode_kontrak_sp3 = $request->input('periode_kontrak_sp3');
        $nilai_kontrak_sp3 = $request->input('nilai_kontrak_sp3');
        $nama_pemilik_rekening = $request->input('nama_pemilik_rekening');
        $no_rekening = $request->input('no_rekening');
        $nama_bank = $request->input('nama_bank');
        $alamat_bank = $request->input('alamat_bank');
        $ttd_pihakpertama = $request->input('ttd_pihakpertama');
        $ttd_pihakkedua = $request->input('ttd_pihakkedua');
        $id_formulir = $request->input('id_formulir');
        $nilai_proyek = $request->input('nilai_proyek');

        if ($id)
        {
            $sp3 = SuratSPPP::all()->find($id);

            if ($sp3) {
                return ResponseFormatter::success(
                    $sp3,
                    'Data Surat SPPP Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Surat SPPP Tidak Ada.',
                    404
                );
            }
        }

        $sp3 = SuratSPPP::all();

        if ($pin) {
            $sp3->where('pin', 'like', '%' . $pin . '%');
        }
        if ($no_surat) {
            $sp3->where('no_surat', 'like', '%' . $no_surat . '%');
        }
        if ($tanggal) {
            $sp3->where('tanggal', 'like', '%' . $tanggal . '%');
        }
        if ($pihak_pertama) {
            $sp3->where('pihak_pertama', 'like', '%' . $pihak_pertama . '%');
        }
        if ($jabatan) {
            $sp3->where('jabatan', 'like', '%' . $jabatan . '%');
        }
        if ($pihak_kedua) {
            $sp3->where('pihak_kedua', 'like', '%' . $pihak_kedua . '%');
        }
        if ($nama_proyek) {
            $sp3->where('nama_proyek', 'like', '%' . $nama_proyek . '%');
        }
        if ($pemilik_proyek) {
            $sp3->where('pemilik_proyek', 'like', '%' . $pemilik_proyek . '%');
        }
        if ($periode_kontrak_sp3) {
            $sp3->where('periode_kontrak_sp3', 'like', '%' . $periode_kontrak_sp3 . '%');
        }
        if ($nilai_kontrak_sp3) {
            $sp3->where('nilai_kontrak_sp3', 'like', '%' . $nilai_kontrak_sp3 . '%');
        }
        if ($nama_pemilik_rekening) {
            $sp3->where('nama_pemilik_rekening', 'like', '%' . $nama_pemilik_rekening . '%');
        }
        if ($no_rekening) {
            $sp3->where('no_rekening', 'like', '%' . $no_rekening . '%');
        }
        if ($nama_bank) {
            $sp3->where('nama_bank', 'like', '%' . $nama_bank . '%');
        }
        if ($alamat_bank) {
            $sp3->where('alamat_bank', 'like', '%' . $alamat_bank . '%');
        }
        if ($ttd_pihakpertama) {
            $sp3->where('ttd_pihakpertama', 'like', '%' . $ttd_pihakpertama . '%');
        }
        if ($ttd_pihakkedua) {
            $sp3->where('ttd_pihakkedua', 'like', '%' . $ttd_pihakkedua . '%');
        }
        if ($id_formulir) {
            $sp3->where('id_formulir', 'like', '%' . $id_formulir . '%');
        }
        if ($nilai_proyek) {
            $sp3->where('nilai_proyek', 'like', '%' . $nilai_proyek . '%');
        }

        return ResponseFormatter::success(
            $sp3,
            'Data Surat SPP Berhasil diambil.'
        );
    }
}
