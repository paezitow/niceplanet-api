<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function show($id)
    {
        $usuario = Usuario::find($id);

        if(!$usuario){
            return response()->json(['message' => 'Nenhum usuário encontrado'], 404);
        }
        
        return response()->json($usuario, 200);
    }

    public function showAll()
    {
        $usuarios = Usuario::get();

        if(!$usuarios){
            return response()->json(['message' => 'Nenhum usuário encontrado'], 404);
        }
        return response()->json(['usuarios'=>$usuarios], 200);
    }
}

