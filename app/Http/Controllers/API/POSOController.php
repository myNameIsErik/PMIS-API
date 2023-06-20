<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\POSO;
use Illuminate\Http\Request;

class POSOController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $nilai = $request->input('nilai');
        $nama_perusahaan = $request->input('nama_perusahaan');
        $type = $request->input('type');
        $bulan = $request->input('bulan');
        $tahun = $request->input('tahun');
        $email = $request->input('email');
        $pin = $request->input('pin');
        $date = $request->input('date');

        if ($id)
        {
            $negosiasi = POSO::all()->find($id);

            if ($negosiasi) {
                return ResponseFormatter::success(
                    $negosiasi,
                    'Data PO & SO Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data PO & SO Tidak Ada.',
                    404
                );
            }
        }

        $negosiasi = POSO::all();

        if ($nilai) {
            $negosiasi->where('nilai', 'like', '%' . $nilai . '%');
        }
        if ($nama_perusahaan) {
            $negosiasi->where('nama_perusahaan', 'like', '%' . $nama_perusahaan . '%');
        }
        if ($type) {
            $negosiasi->where('type', 'like', '%' . $type . '%');
        }
        if ($bulan) {
            $negosiasi->where('bulan', 'like', '%' . $bulan . '%');
        }
        if ($tahun) {
            $negosiasi->where('tahun', 'like', '%' . $tahun . '%');
        }
        if ($email) {
            $negosiasi->where('email', $email);
        }
        if ($pin) {
            $negosiasi->where('pin', 'like', '%' . $pin . '%');
        }
        if ($date) {
            $negosiasi->where('date', 'like', '%' . $date . '%');
        }

        return ResponseFormatter::success(
            $negosiasi,
            'Data PO & SO Berhasil diambil.'
        );
    }
}
