<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::with('school')->find(Auth::id());
        return view('profile',compact('user'));
    }

    public function update(Request $request)
    {
        $file = $request->file('logo');
        $items = $request->all();

        if ($file) {
            $file->move('logo',$file->getClientOriginalName());
            $items['logo'] = $file->getClientOriginalName();
        }

        $user = User::find(Auth::id());
        $school = School::find($user->id_school);
        $school->update($items);

        Alert::toast('Profile updated successfully','success');

        return view('profile',compact('user'));
    }
}
