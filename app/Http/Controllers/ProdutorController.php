<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtor;
use Illuminate\Support\Facades\Log;

class ProdutorController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nomeProdutor' => 'required|string',
            'cpfProdutor' => 'required|string|unique:produtores',
        ]);
        
        $produtor = Produtor::create($request->all());

        if(!$produtor){
            return response()->json(['message' => 'O produtor não foi cadastrado'], 400);
        }
        
        Log::info('Produtor criado com sucesso!');

        return response()->json($produtor, 201);
    }

    public function show($id)
    {
        $produtor = Produtor::find($id);
        if(!$produtor){
            return response()->json(['message' => 'Nenhum produtor encontrado'], 404);
        }
        return response()->json($produtor, 200);
    }

    public function showAll()
    {
        $produtores = Produtor::all();
        if(!$produtores){
            return response()->json(['message' => 'Nenhum produtor encontrado'], 404);
        }
        return response()->json(['produtores'=>$produtores], 200);
    }
}