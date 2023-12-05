<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'genero' => 'required|in:Masculino,Femenino',
            'numeroTelefono' => 'required|integer|min:9',
            'correo' => 'required|string',
            'contrasena' => 'required|string|min:7',
            //'id_domicilio' => 'required|exists:domicilios,id',
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'string' => ':attribute debe ser texto',
            'in' => ':attribute no pertenece a las opciones permitidas',
            'integer' => ':attribute debe ser un valor numérico tipo entero',
            'min' => ':attribute debe tener un mínimo de :min caracteres',
            'exists' => ':attribute no existe en la base de datos',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 400);
        }

        // Crear un nuevo usuario en la base de datos
        $usuario = Usuario::create([
            'nombre' => $request->nombre,
            'apellidos' => $request->apellidos,
            'genero' => $request->genero,
            'numeroTelefono' => $request->numeroTelefono,
            'correo' => $request->correo,
            'contrasena' => bcrypt($request->contrasena),
            'id_domicilio' => $request->id_domicilio,
        ]);

        // Devolver respuesta exitosa
        return response()->json([
            'status' => 'success',
            'message' => 'Usuario creado exitosamente',
        ], 201);
    }


    public function read($id)
    {
        $usuario = Usuario::find($id);
        return $usuario;
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nombre' => 'required|string',
            'apellidos' => 'required|string',
            'genero' => 'required|in:Masculino, Femenino',
            'numeroTelefono' => 'required|integer|min:10|max:12',
            'correo' => 'required|string',
            'contrasena' => 'required|string|min:8',
            'id_domicilio' => 'required|exists:domicilio,id'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'string' => ':attribute debe ser texto',
            'in' => ':attribute no pertenece a las opciones permitidos',
            'integer' => ':attribute debe ser un valor numérico tipo entero',
            'min' => ':attribute debe de tener un minimo de 8 caracteres',
            'max' => ':attribute debe de tener un máximo de 150 caracteres',
            'exists' => ':attribute no existe en la base de datos',
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $usuario = Usuario::findOrFail($id);

        $usuario->nombre = $request->nombre;
        $usuario->apellidos = $request->apellidos;
        $usuario->genero = $request->genero;
        $usuario->numeroTelefono = $request->numeroTelefono;
        $usuario->correo = $request->correo;
        $usuario->contrasena = $request->contrasena;
        $usuario->id_domicilio = $request->id_domicilio;

        $usuario->save();

        return $usuario;

    }

    public function delete($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
    }

}
