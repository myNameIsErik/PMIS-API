<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\UserRole;
use Illuminate\Http\Request;

class UserRoleController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $role = $request->input('role');

        if ($id)
        {
            $user_role = UserRole::all()->find($id);

            if ($user_role) {
                return ResponseFormatter::success(
                    $user_role,
                    'Data User Role Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data User Role Tidak Ada.',
                    404
                );
            }
        }

        $user_role = UserRole::all();

        if ($role) {
            $user_role->where('role', 'like', '%' . $role . '%');
        }

        return ResponseFormatter::success(
            $user_role,
            'Data User Role Berhasil diambil.'
        );
    }
}
