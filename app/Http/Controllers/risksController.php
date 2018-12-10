<?php

namespace App\Http\Controllers;

use App\Models\risks;
use Illuminate\Http\Request;

class risksController extends Controller
{
    public function index()
    {
        return risks::all();
    }

    public function show($id)
    {
        return risks::where('id_ibu', '=', $id)->get();
    }

    public function store(Request $request)
    {
        return risks::create([
            'id_ibu' => $request->json('id_ibu'),
            'keterangan' => $request->json('keterangan'),
            'tanggal' => $request->json('tanggal'),
            'status' => $request->json('status')
        ]);
    }
}
