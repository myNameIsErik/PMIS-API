<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\DataPin;
use Illuminate\Http\Request;

class DataPINController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $pin_formulir = $request->input('pin_formulir');
        
        if ($id)
        {
            $data_pin = DataPin::all()->find($id);

            if ($data_pin) {
                return ResponseFormatter::success(
                    $data_pin,
                    'Data PIN Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data PIN Tidak Ada.',
                    404
                );
            }
        }

        $data_pin = DataPin::all();

        if ($pin_formulir) {
            $data_pin->where('pin_formulir', 'like', '%' . $pin_formulir . '%');
        }

        return ResponseFormatter::success(
            $data_pin,
            'Data PIN Berhasil diambil.'
        );
    }
}
