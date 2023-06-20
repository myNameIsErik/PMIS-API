<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        $norek = $request->input('norek');
        $anrek = $request->input('anrek');
        $currency = $request->input('currency');
        $swift_code = $request->input('swift_code');

        if ($id)
        {
            $bank = Bank::all()->find($id);

            if ($bank) {
                return ResponseFormatter::success(
                    $bank,
                    'Data Bank Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Bank Tidak Ada.',
                    404
                );
            }
        }

        $bank = Bank::all();

        if ($nama) {
            $bank->where('nama', 'like', '%' . $nama . '%');
        }
        if ($alamat) {
            $bank->where('alamat', 'like', '%' . $alamat . '%');
        }
        if ($norek) {
            $bank->where('norek', 'like', '%' . $norek . '%');
        }
        if ($anrek) {
            $bank->where('anrek', 'like', '%' . $anrek . '%');
        }
        if ($currency) {
            $bank->where('currency', 'like', '%' . $currency . '%');
        }
        if ($swift_code) {
            $bank->where('swift_code', 'like', '%' . $swift_code . '%');
        }

        return ResponseFormatter::success(
            $bank,
            'Data Bank Berhasil diambil.'
        );
    }
}
