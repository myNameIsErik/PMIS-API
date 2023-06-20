<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Amandemen;
use Illuminate\Http\Request;

class AmandemenController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $id_formulir = $request->input('id_formulir');
        $tgl_datakontrak = $request->input('tgl_datakontrak');
        $akhir_waktu_datakontrak = $request->input('akhir_waktu_datakontrak');
        $amandemen = $request->input('amandemen');
        $tgl_amandemen = $request->input('tgl_amandemen');
        $scope_amandemen = $request->input('scope_amandemen');
        $nilai_amandemen = $request->input('nilai_amandemen');
        $kode_akhir_periode = $request->input('kode_akhir_periode');
        $m_f = $request->input('m_f');
        $date_update = $request->input('date_update');
        $adendum = $request->input('adendum');

        if ($id)
        {
            $amandemen = Amandemen::all()->find($id);

            if ($amandemen) {
                return ResponseFormatter::success(
                    $amandemen,
                    'Data Amandemen Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Amandemen Tidak Ada.',
                    404
                );
            }
        }

        $amandemen = Amandemen::all();

        if ($id_formulir) {
            $amandemen->where('id_formulir', 'like', '%' . $id_formulir . '%');
        }
        if ($tgl_datakontrak) {
            $amandemen->where('tgl_datakontrak', 'like', '%' . $tgl_datakontrak . '%');
        }
        if ($akhir_waktu_datakontrak) {
            $amandemen->where('akhir_waktu_datakontrak', 'like', '%' . $akhir_waktu_datakontrak . '%');
        }
        if ($amandemen) {
            $amandemen->where('amandemen', 'like', '%' . $amandemen . '%');
        }
        if ($tgl_amandemen) {
            $amandemen->where('tgl_amandemen', 'like', '%' . $tgl_amandemen . '%');
        }
        if ($scope_amandemen) {
            $amandemen->where('scope_amandemen', 'like', '%' . $scope_amandemen . '%');
        }
        if ($nilai_amandemen) {
            $amandemen->where('nilai_amandemen', 'like', '%' . $nilai_amandemen . '%');
        }
        if ($kode_akhir_periode) {
            $amandemen->where('kode_akhir_periode', 'like', '%' . $kode_akhir_periode . '%');
        }
        if ($m_f) {
            $amandemen->where('m_f', $m_f);
        }
        if ($date_update) {
            $amandemen->where('date_update', 'like', '%' . $date_update . '%');
        }
        if ($adendum) {
            $amandemen->where('adendum', 'like', '%' . $adendum . '%');
        }

        return ResponseFormatter::success(
            $amandemen,
            'Data Amandemen Berhasil diambil.'
        );
    }
}
