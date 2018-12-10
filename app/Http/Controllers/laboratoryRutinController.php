<?php

namespace App\Http\Controllers;

use App\Models\laboratoryRutin;
use Illuminate\Http\Request;

class laboratoryRutinController extends Controller
{
    public function index()
    {
        return laboratoryRutin::all();
    }

    public function show($id)
    {
        return laboratoryRutin::where('id_ibu', '=', $id)->get();
    }

    public function store(Request $request)
    {
        return laboratoryRutin::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
