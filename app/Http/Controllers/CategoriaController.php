<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'nombreCategoria' => 'required|in:Perro,Gato'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'in' => ':attribute no pertenece a las opciones permitidos'
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $categoria = new Categoria;
        $categoria->nombreCategoria = $request->nombreCategoria;

        $categoria->save();

    }

    public function read($id)
    {
        $categoria = Categoria::find($id);
        return $categoria;
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'nombreCategoria' => 'required|in:Perro,Gato'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'in' => ':attribute no pertenece a las opciones permitidos'
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $categoria = Categoria::findOrFail($id);

        $categoria->nombreCategoria = $request->nombreCategoria;

        $categoria->save();

        return $categoria;

    }

    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
    }
}
