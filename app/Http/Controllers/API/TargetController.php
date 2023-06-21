<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $month = $request->input('month');
        $target = $request->input('target');

        if ($id)
        {
            $target = Target::all()->find($id);

            if ($target) {
                return ResponseFormatter::success(
                    $target,
                    'Data Target Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Target Tidak Ada.',
                    404
                );
            }
        }

        $target = Target::all();

        if ($month) {
            $target->where('month', 'like', '%' . $month . '%');
        }
        if ($target) {
            $target->where('target', 'like', '%' . $target . '%');
        }

        return ResponseFormatter::success(
            $target,
            'Data Target Berhasil diambil.'
        );
    }
}
