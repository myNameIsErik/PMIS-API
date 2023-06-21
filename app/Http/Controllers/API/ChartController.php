<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Chart;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $month_chart = $request->input('month_chart');
        $sales_chart = $request->input('sales_chart');
        
        if ($id)
        {
            $chart = Chart::all()->find($id);

            if ($chart) {
                return ResponseFormatter::success(
                    $chart,
                    'Data Chart Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Chart Tidak Ada.',
                    404
                );
            }
        }

        $chart = Chart::all();

        if ($month_chart) {
            $chart->where('month_chart', 'like', '%' . $month_chart . '%');
        }
        if ($sales_chart) {
            $chart->where('sales_chart', 'like', '%' . $sales_chart . '%');
        }

        return ResponseFormatter::success(
            $chart,
            'Data Chart Berhasil diambil.'
        );
    }
}
