<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\Period;
use App\Models\Classes;
use App\Models\Student;
use Illuminate\Http\Request;

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
        $classes = Classes::all();
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
        },'period'])->first();

        // $transactions = Transaction::whereTahun($year)->with('student.period')->whereHas('student',function ($query) use ($student)
        // {
        //     $query->whereId($student);
        // })->get();

        // return $students;

        $student = Student::findOrFail($student);

        return view('transaction-recap',compact('students','student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
