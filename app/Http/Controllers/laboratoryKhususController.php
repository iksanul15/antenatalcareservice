<?php

namespace App\Http\Controllers;

use App\Models\laboratoryKhusus;
use Illuminate\Http\Request;

class laboratoryKhususController extends Controller
{
    public function index()
    {
        return laboratoryKhusus::all();
    }

    public function show($id)
    {
        return laboratoryKhusus::where('id_ibu', '=', $id)->get();
    }

    public function store(Request $request)
    {
        return laboratoryKhusus::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
