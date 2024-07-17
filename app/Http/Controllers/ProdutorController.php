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
        
        Log::info('Produtor criado com sucesso!');

        return response()->json($produtor, 201);
    }

    public function show($id)
    {
        $produtor = Produtor::findOrFail($id);

        return response()->json($produtor, 200);
    }

    public function showAll()
    {
        $produtores = Produtor::get();

        return response()->json($produtores, 200);
    }
}