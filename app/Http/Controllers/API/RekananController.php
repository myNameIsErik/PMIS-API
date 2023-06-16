<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Rekanan;
use Illuminate\Http\Request;

class RekananController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $nama_pekerjaan = $request->input('nama_pekerjaan');
        $pemberi_kerja = $request->input('pemberi_kerja');
        $nama_tim = $request->input('nama_tim');
        $proyek_manajer = $request->input('proyek_manajer');
        $proyek_administrasi = $request->input('proyek_administrasi');
        $nilai_proyek = $request->input('nilai_proyek');
        $date_created = $request->input('date_created');
        $status = $request->input('status');
        $email_user = $request->input('email_user');
        $status_profile = $request->input('status_profile');
        $catatan = $request->input('catatan');

        if ($id)
        {
            $rekanan = Rekanan::with(['emailUser'])->find($id);

            if ($rekanan) {
                return ResponseFormatter::success(
                    $rekanan,
                    'Data Rekanan Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Rekanan Tidak Ada.',
                    404
                );
            }
        }

        $rekanan = Rekanan::with(['emailUser']);

        if ($nama_pekerjaan) {
            $rekanan->where('nama_pekerjaan', 'like', '%' . $nama_pekerjaan . '%');
        }
        if ($pemberi_kerja) {
            $rekanan->where('pemberi_kerja', 'like', '%' . $pemberi_kerja . '%');
        }
        if ($nama_tim) {
            $rekanan->where('nama_tim', 'like', '%' . $nama_tim . '%');
        }
        if ($proyek_manajer) {
            $rekanan->where('proyek_manajer', 'like', '%' . $proyek_manajer . '%');
        }
        if ($proyek_administrasi) {
            $rekanan->where('proyek_administrasi', 'like', '%' . $proyek_administrasi . '%');
        }
        if ($nilai_proyek) {
            $rekanan->where('nilai_proyek', 'like', '%' . $nilai_proyek . '%');
        }
        if ($date_created) {
            $rekanan->where('date_created', 'like', '%' . $date_created . '%');
        }
        if ($status) {
            $rekanan->where('status', 'like', '%' . $status . '%');
        }
        if ($email_user) {
            $rekanan->where('email_user', $email_user);
        }
        if ($status_profile) {
            $rekanan->where('status_profile', 'like', '%' . $status_profile . '%');
        }
        if ($catatan) {
            $rekanan->where('catatan', 'like', '%' . $catatan . '%');
        }

        return ResponseFormatter::success(
            $rekanan->paginate($limit),
            'Data Rekanan Berhasil diambil.'
        );
    }
}
