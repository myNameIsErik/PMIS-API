<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\KelompokKeahlian;
use Illuminate\Http\Request;

class KeahlianController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $nama = $request->input('nama');
        
        if ($id)
        {
            $keahlian = KelompokKeahlian::all()->find($id);

            if ($keahlian) {
                return ResponseFormatter::success(
                    $keahlian,
                    'Data Kelompok Keahlian Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Kelompok Keahlian Tidak Ada.',
                    404
                );
            }
        }

        $keahlian = KelompokKeahlian::all();

        if ($nama) {
            $keahlian->where('nama', 'like', '%' . $nama . '%');
        }

        return ResponseFormatter::success(
            $keahlian,
            'Data Kelompok Keahlian Berhasil diambil.'
        );
    }
}
