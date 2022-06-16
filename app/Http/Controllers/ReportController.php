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

        $from = date('Y-m-d',strtotime($request->from));
        $to = date('Y-m-d',strtotime($request->to));

        $transactions = Transaction::whereBetween('payment_date', [$from,$to])->get();
        $user = auth()->user();

        $total = Transaction::sum('jumlah');


        $pdf = PDF::loadView('pdf.rekap', compact('transactions','from','to','user','total'));

        return $pdf->stream();
    }
}
