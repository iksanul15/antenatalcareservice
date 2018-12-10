<?php

namespace App\Http\Controllers;

use App\Models\Ibu;
use Illuminate\Http\Request;

class IbuController extends Controller
{

    public function index()
    {
        return Ibu::all();
    }

    public function show($id)
    {
        return Ibu::find($id);
    }

    public function store(Request $request)
    {
        return Ibu::create([
            'nama' => $request->json('nama'),
            'BPJS' => $request->json('BPJS'),
            'HPHT' => $request->json('HPHT')
        ]);
    }
}
