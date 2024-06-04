<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginApiController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $token = Auth::user()->createToken('app:list', ['*'], now()->addHour());
            return response()->json([
                'msg' => 'Usuario logueado exitosamente',
                'data' => $token->plainTextToken
            ], 200);
        }
    }

    public function logout()
    {
        Auth::user()->tokens()->delete(); //Delete all the token of the user
        return response()->json([
            'msg' => 'Usuario deslogueado exitosamente',
            'data' => null
        ], 200);
    }
}
