<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->documento = $request['documento'];
        $user->nombre = $request['nombre'];
        $user->apellido = $request['apellido'];
        $user->sexo = $request['sexo'];
        $user->telefono = $request['telefono'];
        $user->pregunta_secreta = $request['pregunta_secreta'];
        $user->respuesta_secreta = $request['respuesta_secreta'];
        $user->correo = $request['correo'];
        $user->tipo_usuario = $request['tipo_usuario'];
        $user->estado = $request['estado'];
        $user->password = $request['password'];

        $user->save();
        return $user;
    }

    public function login(Request $request)
    {
        $documento = $request['documento'];
        $password = $request['password'];


        $usuario = User::where('users.documento', '=', $documento)
                            ->select('users.*')
                            ->first();

        if($usuario){
            return response()->json([
                            'documento' => $usuario->id,
                            'codigo' => $usuario->codigo,
                        ]);    
        }else{
            return response('Datos invalidos', 400)->header('Content-Type', 'text/plain');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return isset($user) ? $user : [];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
