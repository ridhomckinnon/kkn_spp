<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        return view('report',compact('transactions'));
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'from' => 'before:to|required',
            'to' => 'required',
        ], [
            'from.required' => 'Tanggal Awal harus diisi',
            'to.required' => 'Tanggal Akhir harus diisi',
            'from.before' => 'Tanggal Awal harus lebih kecil dari Tanggal Akhir',
        ]);
        $from = $request->from;
        $to = $request->to;
        $transactions = Transaction::whereBetween('payment_date', [$request->from, $request->to])->get();
        $user = auth()->user();

        $pdf = PDF::loadView('pdf.rekap', compact('transactions','from','to','user'));

        return $pdf->stream();
    }
}
