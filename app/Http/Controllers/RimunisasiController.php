<?php

namespace App\Http\Controllers;

use App\Models\Rimunisasi;
use Illuminate\Http\Request;

class RimunisasiController extends Controller
{
    public function index()
    {
        return Rimunisasi::all();
    }

    public function show($id)
    {
        return Rimunisasi::where('id_ibu', '=', $id)->get();
    }

    public function store(Request $request)
    {
        return Rimunisasi::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
