<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\UserAccessMenu;
use Illuminate\Http\Request;

class UserAccessMenuController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $role_id = $request->input('role_id');
        $menu_id = $request->input('menu_id');

        if ($id)
        {
            $access_menu = UserAccessMenu::all()->find($id);

            if ($access_menu) {
                return ResponseFormatter::success(
                    $access_menu,
                    'Data User Access Menu Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data User Access Menu Tidak Ada.',
                    404
                );
            }
        }

        $access_menu = UserAccessMenu::all();

        if ($role_id) {
            $access_menu->where('role_id', 'like', '%' . $role_id . '%');
        }
        if ($menu_id) {
            $access_menu->where('menu_id', 'like', '%' . $menu_id . '%');
        }

        return ResponseFormatter::success(
            $access_menu,
            'Data User Access Menu Berhasil diambil.'
        );
    }
}
