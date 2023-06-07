<?php

namespace App\Http\Controllers;
use App\Models\Integrador;
use Illuminate\Http\Request;
class IntrgradoresController extends Controller
{
    public function index()
    {
        return Integrador::all();
    }

    public function store(Request $request)
    {
        $est=new Integrador();
        $est->nombre=$request->nombre;
        $est->gestion=$request->gestion;

        $est->save();
        return $est;
    }
    public function update(Request $request, $id)
    {
        $est=Integrador::find($id);
        $est->gestion=$request->gestion;
        $est->save();
        return $est;
    }
    public function destroy($id)
    {
        return Integrador::destroy($id);
    }
}
