<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Classes;
use App\Models\Student;
use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions = Transaction::all();
        $periods = Period::all();
        $students = Student::all();
        return view('all-transaction', compact('transactions','periods','students'));
    }

    public function classes()
    {
        $students = Student::all();
        $periods = Period::all();
        $classes = Classes::orderBy('name', 'asc')->get();
        return view('transaction', compact('students','periods','classes'));
    }

    public function student($idClass)
    {
        $class = Classes::findOrFail($idClass);
        $students = Student::where('id_classes',$idClass)->get();
        $periods = Period::all();
        $classes = Classes::all();

        return view('all-transaction', compact('class','students','periods','classes','idClass'));
    }

    public function recap($year,$student)
    {
        $students = Student::whereId($student)->with(['transactions'=>function($query) use ($year)
        {
            $query->whereTahun($year);
        },'period','classes'])->first();

        $transactions = Transaction::whereTahun($year)->with('student.period')->whereIdStudent($student)->get();
        // return $transactions;

        // return $students;

        $student = Student::findOrFail($student);

        return view('transaction-recap',compact('students','student','year','transactions'));
    }

    public function store(Request $request,$idStudent)
    {

        $this->validate($request,[
            'payment_date' => 'required'
        ]);
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $nopayment = substr(str_shuffle(Str::upper($permitted_chars)), 0, 17);;

        $items = $request->all();
        $items['id_student'] = $idStudent;
        $items['id_user'] = Auth::user()->id;
        $items['no_payment'] = $nopayment;

        Transaction::create($items);
        Alert::toast('Data berhasil ditambahkan','success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
