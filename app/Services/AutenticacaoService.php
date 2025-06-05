<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AutenticacaoService
{
    public function login($request)
    {
        $credentials = $request->only(['email', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'E-mail ou senha inválidos'], 401);
        }

        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'usuario' => auth('api')->user(),
        ], 200);
    }
}