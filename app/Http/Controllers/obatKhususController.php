<?php

namespace App\Http\Controllers;

use App\Models\obatKhusus;
use Illuminate\Http\Request;

class obatKhususController extends Controller
{
    public function index()
    {
        return obatKhusus::all();
    }

    public function show($id)
    {
        return obatKhusus::where('id_ibu', '=', $id)->get();
    }

    public function store(Request $request)
    {
        return obatKhusus::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
