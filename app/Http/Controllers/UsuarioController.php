<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input=$request->all();
        $input['password']=Hash::make($request->password);
        User::create($input);
        return response()->json([
            'res'=>true,
            'message'=>'Usuario creado correctamente',
        ],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $usuario)
    {
        //
    }

    public function login(Request $request){
        
        $user=User::whereEmail($request->email)->first();
        if(!is_null($user)&& Hash::check($request->password,$user->password)){
            $token=$user->createToken('angular')->accessToken;
          
            $cad =strval($token);
            $user->api_token=$cad;
            $user->save();
            return response()->json([
                'res'=>true,
                'user'=>$user,
                'token'=>$cad,
                'message'=>'Bienvenido al sistema'    
            ], 200);
        }else{
            return response()->json([
                'res'=>false,
                'message'=>'Datos incorrectos'    
            ], 200);
        }


    }

    public function me(){
        return response()->json([
            'ok'=>true,
            'user'=> User::user()
        ]);
    }
}
