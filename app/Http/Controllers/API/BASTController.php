<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Bast;
use Illuminate\Http\Request;

class BASTController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $pin = $request->input('pin');
        $no_dokumen = $request->input('no_dokumen');
        $isi_bast = $request->input('isi_bast');

        if ($id)
        {
            $bast = Bast::all()->find($id);

            if ($bast) {
                return ResponseFormatter::success(
                    $bast,
                    'Data BAST Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data BAST Tidak Ada.',
                    404
                );
            }
        }

        $bast = Bast::all();

        if ($pin) {
            $bast->where('pin', 'like', '%' . $pin . '%');
        }
        if ($no_dokumen) {
            $bast->where('no_dokumen', 'like', '%' . $no_dokumen . '%');
        }
        if ($isi_bast) {
            $bast->where('isi_bast', 'like', '%' . $isi_bast . '%');
        }

        return ResponseFormatter::success(
            $bast,
            'Data BAST Berhasil diambil.'
        );
    }
}
