<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Period;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $period = Period::orderBy('school_year', 'asc')->get();
        $classes = Classes::orderBy('name', 'asc')->get();
        return view('setting', compact('period','classes'));
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
            'school_year' => 'required',
            'nominal' => 'numeric',
            'classes' => 'required',
            'major' => 'required',
        ], [
            'school_year.required' => 'Tahun ajaran harus diisi',
            'nominal.numeric' => 'Nominal harus berupa angka',
            'classes.required' => 'Kelas harus diisi',
            'major.required' => 'Jurusan harus diisi',
        ]);
        $period = new Period;
        $period->fill($request->all());
        $period->save();

        Alert::toast('Tambah Data Berhasil','success');
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
        $period = Period::findOrFail($id);
        return response()->json([
            'data' => $period
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
        $period = Period::findOrFail($request->idPeriod)->update([
            'school_year' => $request->school_year,
            'price_spp' => $request->price_spp,
            'status' => $request->status,
        ]);
        Alert::toast('Update Data Berhasil','success');
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
        $period = Period::findOrFail($id)->delete();
        Alert::toast('Hapus Data Berhasil','success');
        return redirect()->back();
    }
}
