<?php

namespace App\Http\Controllers\API;

use App\Models\User;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return ResponseFormatter::error([
                    'message' => 'Unathorized'
                ], 'Authentication Failed', 500);
            }

            $user = User::where('email', $request->email)->first();

            if (! Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->generateToken();
            return ResponseFormatter::success([
                'access_token' => $tokenResult,
                'token_type' => 'Bearer',
                'user' => $user
            ], 'Authenticated');
        } catch (Exception $error) {
            return ResponseFormatter::error([
                'message' => 'Something Went Wrong',
                'error' => $error
            ], 'Authentication Failed', 500);
        }
    }

    public function fetch()
    {
        // return ResponseFormatter::success($request->user(), 'Data Berhasil Diambil'); 
        $user = Auth::user();

        return ResponseFormatter::success([
            'message' => 'Success',
            'user' => $user
        ]);
    }

    public function updateProfile(Request $request)
    {
        $data = $request->all();

        $user = Auth::user();
        $user->update($data);

        return ResponseFormatter::success($user, 'Profile Updated');
    }

    public function logout(Request $request)
    {
        // Auth::logout();
        // Session::flush();
        $user = Auth::user();
    
        if ($user) {
            $user->api_token = null;
            $user->save();
        }

        return ResponseFormatter::success([
            'message' => 'Token Revoked'
        ], 'Logout Success');
    }
}
