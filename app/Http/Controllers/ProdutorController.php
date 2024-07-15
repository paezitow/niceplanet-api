<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtor;

class ProdutorController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nomeProdutor' => 'required|string',
            'cpfProdutor' => 'required|string|unique:produtores',
        ]);

        $produtor = Produtor::create($request->all());

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