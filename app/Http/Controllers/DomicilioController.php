<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domicilio;
use Illuminate\Support\Facades\Validator;

class DomicilioController extends Controller
{
    public function create(Request $request)
    {
        $rules = [
            'calle' => 'required|string|max:150',
            'numeroCasa' => 'required|integer',
            'fraccionamiento' => 'required|string|max:150',
            'cp' => 'required|integer',
            'estado' => 'required|string|min:10|max:50',
            'municipio' => 'required|string|min:10|max:150'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'string' => ':attribute debe ser texto',
            'integer' => ':attribute debe ser un valor numérico tipo entero',
            'max' => ':attribute debe de tener un máximo de 150 caracteres'
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        // Verificar si hay errores de validación
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }

        $domicilio = new Domicilio;
        $domicilio->calle = $request->calle;
        $domicilio->numeroCasa = $request->numeroCasa;
        $domicilio->fraccionamiento = $request->fraccionamiento;
        $domicilio->cp = $request->cp;
        $domicilio->estado = $request->estado;
        $domicilio->municipio = $request->municipio;

        $domicilio->save();

    }

    public function read($id)
    {
        $domicilio = Domicilio::find($id);
        return $domicilio;
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'calle' => 'required|string|max:150',
            'numeroCasa' => 'required|integer',
            'fraccionamiento' => 'required|string|max:150',
            'cp' => 'required|integer',
            'estado' => 'required|string|min:10|max:50',
            'municipio' => 'required|string|min:10|max:150'
        ];

        $messages = [
            'required' => ':attribute es OBLIGATORIO',
            'string' => ':attribute debe ser texto',
            'integer' => ':attribute debe ser un valor numérico tipo entero',
            'max' => ':attribute debe de tener un máximo de 150 caracteres'
        ];

        $validator = validator::make($request->all(), $rules, $messages);

        

        $domicilio = Domicilio::findOrFail($id);

        $domicilio->calle = $request->input('calle');
        $domicilio->numeroCasa = input('numeroCasa');
        $domicilio->fraccionamiento = input('fraccionamiento');
        $domicilio->cp = input('cp');
        $domicilio->estado = input('estado');
        $domicilio->municipio = input('municipio');

        $domicilio->save();

        return $domicilio;
        //return redirect()->route('domicilio.index');

    }

    public function delete($id)
    {
        $domicilio = Domicilio::find($id);
        $domicilio->delete();
    }

}
