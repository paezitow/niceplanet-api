<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propriedade;

class PropriedadeController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nomePropriedade' => 'required|string',
            'cadastroRural' => 'required|string|unique:propriedades',
        ]);

        $propriedade = Propriedade::create($request->all());

        return response()->json($propriedade, 201);
    }

    public function show($id)
    {
        $propriedade = Propriedade::findOrFail($id);

        return response()->json($propriedade, 200);
    }

    public function showAll()
    {
        $propriedades = Propriedade::get();

        return response()->json($propriedades, 200);
    }
}

