<?php

namespace App\Http\Controllers;

use App\Models\Estudiant;
use Illuminate\Http\Request;


class EstudiantesController extends Controller
{
    public function index()
    {
        return Estudiant::all();
    }

    public function store(Request $request)
    {
        $est=new Estudiant();
        $est->id_integradors=$request->id_integradors;
        $est->descripcion=$request->descripcion;
        $est->fecha=$request->fecha;
        $est->save();
        return $est;
    }
    public function update(Request $request, $id)
    {
        $est=Estudiant::find($id);
        $est->id_integradores=$request->id_integradores;
        $est->descripcion=$request->descripcion;
        $est->fecha=$request->fecha;
        $est->save();
        return $est;
    }
    public function destroy($id)
    {
        return Estudiant::destroy($id);
    }
}
