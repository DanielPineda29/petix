<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Oferta;
use Illuminate\Support\Facades\Validator;

class OfertaController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'id_producto' => 'required|exists:productos,id',
            'descuento' => 'required|numeric',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'exists' => ':attribute no existe en la base de datos',
            'numeric' => ':attribute debe ser un valor numérico',
            'date' => 'El :attribute solo acepta fechas'
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $oferta = new Oferta;
        $oferta->id_producto = $request->id_producto;
        $oferta->descuento = $request->descuento;
        $oferta->fechaInicio = $request->fechaInicio;
        $oferta->fechaFin = $request->fechaFin;

        $oferta->save();

    }

    public function read($id)
    {
        $oferta = Oferta::find($id);
        return $oferta;
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'id_producto' => 'required|exists:producto,id',
            'descuento' => 'required|float',
            'fechaInicio' => 'required|date',
            'fechaFin' => 'required|date'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'exists' => ':attribute no existe en la base de datos',
            'float' => ':attribute debe ser un valor numérico tipo flotante',
            'date' => 'El :attribute solo acepta fechas'
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $oferta = Oferta::findOrFail($id);

        $oferta->id_producto = $request->id_producto;
        $oferta->descuento = $request->descuento;
        $oferta->fechaInicio = $request->fechaInicio;
        $oferta->fechaFin = $request->fechaFin;

        $oferta->save();

        return $oferta;

    }

    public function delete($id)
    {
        $oferta = Oferta::find($id);
        $oferta->delete();
    }
}
