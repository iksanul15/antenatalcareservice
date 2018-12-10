<?php

namespace App\Http\Controllers;

use App\Models\obatRutins;
use Illuminate\Http\Request;

class obatRutinsController extends Controller
{
    public function index()
    {
        return obatRutins::all();
    }

    public function show($id)
    {
        return obatRutins::where('id_ibu', '=', $id)->get();
    }

    public function store(Request $request)
    {
        return obatRutins::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
