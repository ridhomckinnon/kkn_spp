<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = Classes::latest()->whereisActive('active')->get();
        $inActiveClasses = Classes::latest()->whereisActive('inactive')->get();
        return view('classes', compact('classes', 'inActiveClasses'));
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
        $id_school = Auth::user()->school->id;

        $this->validate($request, [
            'name' => 'required',
        ], [
            'name.required' => 'Nama harus diisi',
        ]);

        $classes = Classes::create([
            'name' => $request->name,
            'id_school' => $id_school
        ]);
        Alert::toast('Tambah Berhasil Data', 'success');
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
        $classes = Classes::findOrFail($id);

        return response()->json([
            'data' => $classes
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
        $classes = Classes::findOrFail($request->idClasses)->update([
            'name' => $request->name,
        ]);
        Alert::toast('Update Data Berhasil ', 'success');
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
        $classes = Classes::findOrFail($id);
        $classes->delete();
        $classes->student()->delete();

        Alert::toast('Hapus Data Berhasil ', 'success');
        return redirect()->back();
    }

    public function changeStatus($id)
    {
        $classes = Classes::findOrFail($id);
        if ($classes->is_active == 'active') {
            $classes->update([
                'is_active' => 'inactive'
            ]);
        } else {
            $classes->update([
                'is_active' => 'active'
            ]);
        }
        Alert::toast('Update Status Berhasil ', 'success');
        return redirect()->back();
    }
}
