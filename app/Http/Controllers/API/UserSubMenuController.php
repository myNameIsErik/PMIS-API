<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\UserSubMenu;
use Illuminate\Http\Request;

class UserSubMenuController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $menu_id = $request->input('menu_id');
        $title = $request->input('title');
        $url = $request->input('url');
        $icon = $request->input('icon');
        $is_active = $request->input('is_active');

        if ($id)
        {
            $sub_menu = UserSubMenu::all()->find($id);

            if ($sub_menu) {
                return ResponseFormatter::success(
                    $sub_menu,
                    'Data User Sub Menu Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data User Sub Menu Tidak Ada.',
                    404
                );
            }
        }

        $sub_menu = UserSubMenu::all();

        if ($menu_id) {
            $sub_menu->where('menu_id', 'like', '%' . $menu_id . '%');
        }
        if ($title) {
            $sub_menu->where('title', 'like', '%' . $title . '%');
        }
        if ($url) {
            $sub_menu->where('url', 'like', '%' . $url . '%');
        }
        if ($icon) {
            $sub_menu->where('icon', 'like', '%' . $icon . '%');
        }
        if ($is_active) {
            $sub_menu->where('is_active', 'like', '%' . $is_active . '%');
        }

        return ResponseFormatter::success(
            $sub_menu,
            'Data User Sub Menu Berhasil diambil.'
        );
    }
}
