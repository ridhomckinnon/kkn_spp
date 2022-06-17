<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;


class MutationController extends Controller
{
    public function index(Request $request)
    {
        $students = Student::with('period')->get();
        return view('mutation',compact('students'));
    }

    public function detail($id)
    {
        $student = Student::with('period','classes')->findOrFail($id);

        $transactions = Transaction::with('student')->whereIdStudent($id)->limit(10)->get();

        // return $transactions;
        return view('detail-mutation',compact('student','transactions'));
    }

    public function cetak(Request $request,$id)
    {
        $from = date('Y-m-d',strtotime($request->from));
        $to = date('Y-m-d',strtotime($request->to));

        $student = Student::with('period','classes.school')->findOrFail($id);
        $transactions = Transaction::with('student')
                        ->whereIdStudent($id)
                        ->whereBetween('payment_date',[$from,$to])
                        ->get();



        $pdf = PDF::loadView('pdf.mutation', compact('transactions','student','from','to'));

        // return $pdf->download();
        return $pdf->stream();

    }
}
