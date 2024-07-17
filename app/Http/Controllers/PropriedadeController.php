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

        if(!$propriedade){
            return response()->json(['message' => 'A propriedade não foi cadastrada'], 400);
        }

        Log::info('Propriedade criada com sucesso!');

        return response()->json($propriedade, 201);
        
    }

    public function show($id)
    {
        $propriedade = Propriedade::find($id);

        if(!$propriedade){
            return response()->json(['message' => 'Nenhuma propriedade encontrada'], 404);
        }
        return response()->json($propriedade, 200);
    }

    public function showAll()
    {
        $propriedades = Propriedade::all();
        
        if(!$propriedades){
            return response()->json(['message' => 'Nenhuma propriedade encontrada'], 404);
        }
        return response()->json(['propriedades'=>$propriedades], 200);
    }
}

