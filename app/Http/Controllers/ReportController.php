<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ReportController extends Controller
{
    public function index()
    {
        $transactions = Transaction::all();
        $classes = Classes::whereIsActive('active')->get();
        return view('report', compact('transactions', 'classes'));
    }

    public function post(Request $request)
    {

        $bulan = $request->bulan;
        $tahun = $request->tahun;
        $class = $request->class;

        $classes = Classes::with('student')->find($class);
        // $transactions = Transaction::whereBetween('payment_date', [$from,$to])->get();
        // $total = Transaction::sum('jumlah');
        $user = auth()->user();
        $transactions = Transaction::whereIn('id_student', $classes->student->pluck('id'))
            ->whereMonth('payment_date', $bulan)
            ->whereYear('payment_date', $tahun)
            ->get();

        $pdf = PDF::loadView('pdf.rekap', compact('classes', 'bulan', 'tahun', 'user', 'transactions'))->setPaper('a4', 'potrait');;

        return $pdf->stream();
    }
}
