<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::whereRole('operator')->get();

        return view('user', compact('users'));
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
        $data = $request->validate(
            [
                'name' => 'required',
                'username' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required|same:c_password',
                'c_password' => 'required',
            ],[
                'name.required' => 'Nama harus diisi',
                'username.required' => 'Username harus diisi',
                'email.required' => 'Email harus diisi',
                'password.required' => 'Password harus diisi',
                'c_password.required' => 'Konfirmasi password harus diisi',
                'password.same' => 'Konfirmasi password harus sama dengan password',
            ]
        );

        $req = $request->all();
        $school_id = Auth::user()->id_school;
        $req['id_school'] = $school_id;
        $req['password'] = bcrypt($req['password']);
        User::create($req);
        Alert::toast('Tambah Data Berhasil', 'success');

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
        $user = User::findOrFail($id);

        return response()->json([
            'data' => $user
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
        $data = $request->all();

        if ($data['password'] == null) {
            unset($data['password']);
        }else{
            $data['password'] = bcrypt($data['password']);
        }

        User::findOrFail($data['id'])->update($data);
        Alert::toast('Update Data Berhasil', 'success');

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
        $user = User::findOrFail($id)->delete();
        Alert::toast('Hapus Data Berhasil', 'success');
        return redirect()->back();
    }
}
