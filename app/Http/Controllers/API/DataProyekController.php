<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\DataProyek;
use Illuminate\Http\Request;

class DataProyekController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $kode_proyek = $request->input('kode_proyek');
        $tahap_proyek = $request->input('tahap_proyek');
        $tgl_1 = $request->input('tgl_1');
        $tgl_2 = $request->input('tgl_2');
        $tgl_3 = $request->input('tgl_3');
        $tgl_terdekat = $request->input('tgl_terdekat');
        $status = $request->input('status');
        $pm = $request->input('pm');
        
        if ($id)
        {
            $data_proyek = DataProyek::all()->find($id);

            if ($data_proyek) {
                return ResponseFormatter::success(
                    $data_proyek,
                    'Data Proyek Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Proyek Tidak Ada.',
                    404
                );
            }
        }

        $data_proyek = DataProyek::all();

        if ($kode_proyek) {
            $data_proyek->where('kode_proyek', 'like', '%' . $kode_proyek . '%');
        }
        if ($tahap_proyek) {
            $data_proyek->where('tahap_proyek', 'like', '%' . $tahap_proyek . '%');
        }
        if ($tgl_1) {
            $data_proyek->where('tgl_1', 'like', '%' . $tgl_1 . '%');
        }
        if ($tgl_2) {
            $data_proyek->where('tgl_2', 'like', '%' . $tgl_2 . '%');
        }
        if ($tgl_3) {
            $data_proyek->where('tgl_3', 'like', '%' . $tgl_3 . '%');
        }
        if ($tgl_terdekat) {
            $data_proyek->where('tgl_terdekat', 'like', '%' . $tgl_terdekat . '%');
        }
        if ($status) {
            $data_proyek->where('status', 'like', '%' . $status . '%');
        }
        if ($pm) {
            $data_proyek->where('pm', 'like', '%' . $pm . '%');
        }

        return ResponseFormatter::success(
            $data_proyek,
            'Data Proyek Berhasil diambil.'
        );
    }
}
