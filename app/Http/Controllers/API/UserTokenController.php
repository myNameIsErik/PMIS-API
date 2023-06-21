<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\UserToken;
use Illuminate\Http\Request;

class UserTokenController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $email = $request->input('email');
        $token = $request->input('token');

        if ($id)
        {
            $user_token = UserToken::all()->find($id);

            if ($user_token) {
                return ResponseFormatter::success(
                    $user_token,
                    'Data User Token Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data User Token Tidak Ada.',
                    404
                );
            }
        }

        $user_token = UserToken::all();

        if ($email) {
            $user_token->where('email', 'like', '%' . $email . '%');
        }
        if ($token) {
            $user_token->where('token', 'like', '%' . $token . '%');
        }

        return ResponseFormatter::success(
            $user_token,
            'Data User Token Berhasil diambil.'
        );
    }
}
