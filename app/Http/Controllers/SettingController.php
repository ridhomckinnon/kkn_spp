<?php

namespace App\Http\Controllers;

use App\Models\Period;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $period = Period::all();
        return view('setting', compact('period'));
    }
}
