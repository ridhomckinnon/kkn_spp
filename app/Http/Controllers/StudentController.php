<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Period;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        $periods = Period::all();
        $classes = Classes::orderBy('name', 'asc')->get();
        return view('student', compact('students', 'periods', 'classes'));
    }

    public function classes($idClass)
    {
        $class = Classes::findOrFail($idClass);
        $students = Student::where('id_classes', $idClass)->orderBy('name', 'asc')->get();
        $periods = Period::all();
        $classes = Classes::all();

        return view('all-student', compact('class', 'students', 'periods', 'classes', 'idClass'));
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
        $this->validate($request, [
            'name' => 'required',
            'id_classes' => 'required',
            'id_period' => 'required',
            'phone' => 'numeric',
            'nis' => 'required|unique:students'
        ],[
            'name.required' => 'Nama harus diisi',
            'id_classes.required' => 'Kelas harus diisi',
            'id_period.required' => 'Periode harus diisi',
            'phone.numeric' => 'Nomor telepon harus angka',
            'nis.required' => 'NIS harus diisi',
            'nis.unique' => 'NIS sudah ada'
        ]);

        $students = Student::create($request->all());

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);

        return response()->json([
            'data' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'id_classes' => 'required',
            'id_period' => 'required',
            'phone' => 'numeric',
            'nis' => 'required|unique:students,nis,'.$request->id
        ],[
            'name.required' => 'Nama harus diisi',
            'id_classes.required' => 'Kelas harus diisi',
            'id_period.required' => 'Periode harus diisi',
            'phone.numeric' => 'Nomor telepon harus angka',
            'nis.required' => 'NIS harus diisi',
            'nis.unique' => 'NIS sudah ada'
        ]);

        $student = Student::findOrFail($request->id)->update([
            "id" => $request->id,
            "nis" => $request->nis,
            "name" => $request->name,
            "gender" => $request->gender,
            "major" => $request->major,
            "id_classes" => $request->id_classes,
            "id_period" => $request->id_period,
            "address" => $request->address,
            "phone" => $request->phone,
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::findOrFail($id)->delete();

        return redirect()->back();
    }
}
