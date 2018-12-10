<?php

namespace App\Http\Controllers;

use App\Models\Rkontrol;
use Illuminate\Http\Request;

class RkontrolController extends Controller
{
    public function index()
    {
        return Rkontrol::all();
    }

    public function show($id)
    {
        return Rkontrol::where('id_ibu', '=', $id)->get();
    }

    public function store(Request $request)
    {
        return Rkontrol::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
