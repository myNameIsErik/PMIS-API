<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\LogHistory;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $username = $request->input('username');
        $email_user = $request->input('email_user');
        $comment = $request->input('comment');
        $status = $request->input('status');
        $nama_pekerjaan = $request->input('nama_pekerjaan');
        $image_user = $request->input('image_user');
        
        if ($id)
        {
            $history = LogHistory::all()->find($id);

            if ($history) {
                return ResponseFormatter::success(
                    $history,
                    'Data History Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data History Tidak Ada.',
                    404
                );
            }
        }

        $history = LogHistory::all();

        if ($username) {
            $history->where('username', 'like', '%' . $username . '%');
        }
        if ($email_user) {
            $history->where('email_user', 'like', '%' . $email_user . '%');
        }
        if ($comment) {
            $history->where('comment', 'like', '%' . $comment . '%');
        }
        if ($status) {
            $history->where('status', 'like', '%' . $status . '%');
        }
        if ($nama_pekerjaan) {
            $history->where('nama_pekerjaan', 'like', '%' . $nama_pekerjaan . '%');
        }
        if ($image_user) {
            $history->where('image_user', 'like', '%' . $image_user . '%');
        }

        return ResponseFormatter::success(
            $history,
            'Data History Berhasil diambil.'
        );
    }
}
