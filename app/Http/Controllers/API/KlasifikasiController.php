<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Klasifikasi;
use Illuminate\Http\Request;

class KlasifikasiController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $kode_klasifikasi = $request->input('kode_klasifikasi');
        $kategori = $request->input('kategori');
        $nama = $request->input('nama');
        
        if ($id)
        {
            $klasifikasi = Klasifikasi::all()->find($id);

            if ($klasifikasi) {
                return ResponseFormatter::success(
                    $klasifikasi,
                    'Data Klasifikasi Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Klasifikasi Tidak Ada.',
                    404
                );
            }
        }

        $klasifikasi = Klasifikasi::all();

        if ($kode_klasifikasi) {
            $klasifikasi->where('kode_klasifikasi', 'like', '%' . $kode_klasifikasi . '%');
        }
        if ($kategori) {
            $klasifikasi->where('kategori', 'like', '%' . $kategori . '%');
        }
        if ($nama) {
            $klasifikasi->where('nama', 'like', '%' . $nama . '%');
        }

        return ResponseFormatter::success(
            $klasifikasi,
            'Data Klasifikasi Berhasil diambil.'
        );
    }
}
