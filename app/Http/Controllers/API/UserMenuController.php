<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\UserMenu;
use Illuminate\Http\Request;

class UserMenuController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $menu = $request->input('menu');

        if ($id)
        {
            $user_menu = UserMenu::all()->find($id);

            if ($user_menu) {
                return ResponseFormatter::success(
                    $user_menu,
                    'Data User Menu Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data User Menu Tidak Ada.',
                    404
                );
            }
        }

        $user_menu = UserMenu::all();

        if ($menu) {
            $user_menu->where('menu', 'like', '%' . $menu . '%');
        }

        return ResponseFormatter::success(
            $user_menu,
            'Data User Menu Berhasil diambil.'
        );
    }
}
