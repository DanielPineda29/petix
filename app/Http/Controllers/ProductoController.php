<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'id_categoria' => 'required|exists:categorias,id',
            'marca' => 'required|string|max:100',
            'nombreProducto' => 'required|string|max:150',
            'descripcion' => 'required|string|max:500',
            'imagen' => 'required|nullable|file|mimes:jpeg,png',
            'precio' => 'required|numeric'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'string' => ':attribute debe ser texto',
            'max' => ':attribute debe de tener un máximo de 150 caracteres',
            'exists' => ':attribute no existe en la base de datos',
            'file' => 'El :attribute debe ser una imagen',
            'mimes' => 'El :attribute debe ser uno de los siguientes formatos: jpeg, png.',
            'numeric' => ':attribute debe ser un valor numérico'
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $producto = new Producto;
        $producto->id_categoria = $request->id_categoria;
        $producto->marca = $request->marca;
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')) {
            $producto->imagen = $request->file('imagen')->store('ImagenesProductos');
        }
        $producto->precio = $request->precio;

        $producto->save();

    }

    public function read($id)
    {
        $producto = Producto::find($id);
        return $producto;
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'id_categoria' => 'required|exists:categorias,id',
            'marca' => 'required|string|max:100',
            'nombreProducto' => 'required|string|max:150',
            'descripcion' => 'required|string|max:500',
            'imagen' => 'file|mimes:jpeg,png',
            'precio' => 'required|float'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'string' => ':attribute debe ser texto',
            'max' => ':attribute debe de tener un máximo de 150 caracteres',
            'exists' => ':attribute no existe en la base de datos',
            'file' => 'El :attribute debe ser una imagen',
            'mimes' => 'El :attribute debe ser uno de los siguientes formatos: jpeg, png.',
            'float' => ':attribute debe ser un valor numérico tipo flotante',
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $producto = Producto::findOrFail($id);

        $producto = new Producto;
        $producto->id_categoria = $request->id_categoria;
        $producto->marca = $request->marca;
        $producto->nombreProducto = $request->nombreProducto;
        $producto->descripcion = $request->descripcion;
        $producto->image = $request->image;
        $producto->precio = $request->precio;
        if ($request->hasFile('imagen')) {
            $producto->imagen = $request->file('imagen')->store('ImagenesProductos');
        }
        $producto->save();

        return $producto;

    }

    public function delete($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
    }
}
