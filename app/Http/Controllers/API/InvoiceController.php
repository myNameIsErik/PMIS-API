<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        // $limit = $request->input('limit');
        $pin = $request->input('pin');
        $no_invoice = $request->input('no_invoice');
        $tanggal_permohonan = $request->input('tanggal_permohonan');
        $presentase_pembayaran = $request->input('presentase_pembayaran');
        $jumlah_pembayaran = $request->input('jumlah_pembayaran');
        $termin = $request->input('termin');
        $tadatangan = $request->input('tadatangan');
        $no_po = $request->input('no_po');
        $no_spk = $request->input('no_spk');
        $no_amandemen = $request->input('no_amandemen');
        $tgl_proyek = $request->input('tgl_proyek');
        $nilai_proyek = $request->input('nilai_proyek');
        $id_formulir = $request->input('id_formulir');
        $perkiraan_pembayaran = $request->input('perkiraan_pembayaran');
        $bank = $request->input('bank');
        $norek = $request->input('norek');
        $deskripsi_invoice = $request->input('deskripsi_invoice');
        $no_faktur_pajak = $request->input('no_faktur_pajak');
        $ppn = $request->input('ppn');
        $status_no = $request->input('status_no');
        $status_pembayaran = $request->input('status_pembayaran');

        if ($id)
        {
            $invoice = Invoice::all()->find($id);

            if ($invoice) {
                return ResponseFormatter::success(
                    $invoice,
                    'Data Invoice Berhasil diambil.'
                );
            } else {
                return ResponseFormatter::error(
                    null,
                    'Data Invoice Tidak Ada.',
                    404
                );
            }
        }

        $invoice = Invoice::all();

        if ($pin) {
            $invoice->where('pin', 'like', '%' . $pin . '%');
        }
        if ($no_invoice) {
            $invoice->where('no_invoice', 'like', '%' . $no_invoice . '%');
        }
        if ($tanggal_permohonan) {
            $invoice->where('tanggal_permohonan', 'like', '%' . $tanggal_permohonan . '%');
        }
        if ($presentase_pembayaran) {
            $invoice->where('presentase_pembayaran', 'like', '%' . $presentase_pembayaran . '%');
        }
        if ($jumlah_pembayaran) {
            $invoice->where('jumlah_pembayaran', 'like', '%' . $jumlah_pembayaran . '%');
        }
        if ($termin) {
            $invoice->where('termin', 'like', '%' . $termin . '%');
        }
        if ($tadatangan) {
            $invoice->where('tadatangan', 'like', '%' . $tadatangan . '%');
        }
        if ($no_po) {
            $invoice->where('no_po', 'like', '%' . $no_po . '%');
        }
        if ($no_spk) {
            $invoice->where('no_spk', 'like', '%' . $no_spk . '%');
        }
        if ($no_amandemen) {
            $invoice->where('no_amandemen', 'like', '%' . $no_amandemen . '%');
        }
        if ($tgl_proyek) {
            $invoice->where('tgl_proyek', 'like', '%' . $tgl_proyek . '%');
        }
        if ($nilai_proyek) {
            $invoice->where('nilai_proyek', 'like', '%' . $nilai_proyek . '%');
        }
        if ($id_formulir) {
            $invoice->where('id_formulir', 'like', '%' . $id_formulir . '%');
        }
        if ($perkiraan_pembayaran) {
            $invoice->where('perkiraan_pembayaran', 'like', '%' . $perkiraan_pembayaran . '%');
        }
        if ($bank) {
            $invoice->where('bank', 'like', '%' . $bank . '%');
        }
        if ($norek) {
            $invoice->where('norek', 'like', '%' . $norek . '%');
        }
        if ($deskripsi_invoice) {
            $invoice->where('deskripsi_invoice', 'like', '%' . $deskripsi_invoice . '%');
        }
        if ($no_faktur_pajak) {
            $invoice->where('no_faktur_pajak', 'like', '%' . $no_faktur_pajak . '%');
        }
        if ($ppn) {
            $invoice->where('ppn', 'like', '%' . $ppn . '%');
        }
        if ($status_no) {
            $invoice->where('status_no', 'like', '%' . $status_no . '%');
        }
        if ($status_pembayaran) {
            $invoice->where('status_pembayaran', 'like', '%' . $status_pembayaran . '%');
        }

        return ResponseFormatter::success(
            $invoice,
            'Data Invoice Berhasil diambil.'
        );
    }
}
