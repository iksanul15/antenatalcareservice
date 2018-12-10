<?php

namespace App\Http\Controllers;

use App\Models\informasis;
use Illuminate\Http\Request;

class informasisController extends Controller
{
    public function index()
    {
        return informasis::all();
    }

    public function show($id)
    {
        return informasis::find($id);
    }

    public function store(Request $request)
    {
        return informasis::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
