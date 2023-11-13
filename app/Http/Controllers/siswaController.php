<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaData;

class SiswaController extends Controller
{
    public function viewAllData()
    {
        $siswas = SiswaData::all();

        return view('siswa.page', ['siswas' => $siswas]);
    }

    public function viewDetailData($id)
    {
        $siswa = SiswaData::find($id);

        return view('siswa.detail', ['siswa' => $siswa]);
    }
}