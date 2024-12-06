<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('input_nama');
    }

    public function showOutput(Request $request)
    {
        $nama = $request->input('nama');
        return view('output_nama', ['nama' => $nama]);
    }

    public function processForm(Request $request)
    {
        $nama = $request->input('nama');
        return view('output_nama', ['nama' => $nama]);
    }
}
