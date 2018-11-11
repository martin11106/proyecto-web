<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\datos_user;

class AuthController extends Controller
{
    public function register(RegisterFormRequest $request)
    {
        $user = new datos_user;
        $user->correo = $request->correo;
        $user->matricula = $request->matircula;
        $user->password = bcrypt($request->password);
        $user->save();
    
        return response([
            'status' => 'success',
            'data' => $user
           ], 200);
     }
     public function login(Request $request)
{
    $credentials = $request->only('matricula', 'password');

    if ( ! $token = JWTAuth::attempt($credentials)) {
            return response([
                'status' => 'error',
                'error' => 'invalid.credentials',
                'msg' => 'Invalid Credentials.'
            ], 400);
    }

    return response([
            'status' => 'success'
        ])
        ->header('Authorization', $token);
}
public function user(Request $request)
{
    $user = datos_user::find(Auth::user()->id);

    return response([
            'status' => 'success',
            'data' => $user
        ]);
}

public function refresh()
{
    return response([
            'status' => 'success'
        ]);
}
public function logout()
{
    JWTAuth::invalidate();

    return response([
            'status' => 'success',
            'msg' => 'Logged out Successfully.'
        ], 200);
}
}
