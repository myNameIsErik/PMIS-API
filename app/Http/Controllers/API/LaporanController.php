<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Laporan;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $pin = $request->input('pin');
        $no_laporan = $request->input('no_laporan');
        $tgl_laporan = $request->input('tgl_laporan');
        
        if ($id)
        {
            $laporan = Laporan::all()->find($id);

            if ($laporan) {
                return ResponseFormatter::success(
                    $laporan,
                    'Data Laporan Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Laporan Tidak Ada.',
                    404
                );
            }
        }

        $laporan = Laporan::all();

        if ($pin) {
            $laporan->where('pin', 'like', '%' . $pin . '%');
        }
        if ($no_laporan) {
            $laporan->where('no_laporan', 'like', '%' . $no_laporan . '%');
        }
        if ($tgl_laporan) {
            $laporan->where('tgl_laporan', 'like', '%' . $tgl_laporan . '%');
        }

        return ResponseFormatter::success(
            $laporan,
            'Data Laporan Berhasil diambil.'
        );
    }
}
