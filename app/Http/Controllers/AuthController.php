<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'nomeUsuario' => 'required|string|unique:usuarios',
            'senhaUsuario' => 'required|string|min:8', //Mínimo de 8 caracteres na senha
        ]);
        
        $usuario = new Usuario([
            'nomeUsuario' => $request->nomeUsuario,
            'senhaUsuario' => Hash::make($request->senhaUsuario),
        ]);
        
        $usuario->save();

        Log::info('Usuário registrado com sucesso!');
        
        return response()->json(['message' => 'Usuário registrado com sucesso!'], 201);
    }

    public function login(Request $request)
    {
        // efetua a validação das informações enviadas pelo usuário para certificar de que são strings
        $request->validate([
            'nomeUsuario' => 'required|string',
            'senhaUsuario' => 'required|string',
        ]);


        //busca se o usuário existe no banco de dados
        $usuario = Usuario::where('nomeUsuario', $request->nomeUsuario)->first();
        
        // retorna se o usuário for inexistente
        if (!$usuario) {
            return response()->json(['message' => 'Usuário Inexistente'], 401);
        }

        // retorna se a senha do usuário for inválida
        if (!Hash::check($request->senhaUsuario, $usuario->senhaUsuario)) {
            return response()->json(['message' => 'Credenciais inválidas!'], 401);
        }

        $token = $usuario->createToken('authToken',['*'],now()->addMinutes(60));

        Log::info('Usuário logado com sucesso!');
        
        return response()->json(['token' => $token->plainTextToken, 'Expires in' => 60 .' minutes'], 200);
    }
}

