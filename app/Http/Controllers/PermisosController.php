<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
session_start();
class PermisosController extends Controller
{
    public function registrapermiso()
    {
        return view('front_end.permisos.registrapermiso');
    }

    public function ingresarPermiso(Request $request)
    {
        $rut = $request->input('rut');
        $estamentos = DB::table('estamentos')->get();

        $funcionarios = DB::table('funcionarios')
            ->where('rutFunc', '=',$rut  )->get();
        $_SESSION['id_funcionario'] = $funcionarios[0]->idFunc;


        return view('front_end.permisos.ingresarPermiso', [
            'estamentos' => $estamentos,
            'funcionario' => $funcionarios
        ]);
    }
    public function guardarpermisos(Request $request){

        $idFunc = $_SESSION['id_funcionario'];
        DB::table('permisosadministrativos')->insert([
           'idFunc'=> $idFunc,
            'estamentoPer'=>$request->input('estamento'),
            'desdePer'=>$request->input('fecha_desde'),
            'hastaPer'=>$request->input('fecha_hasta'),
            'diasPer'=>$request->input('cantidad_de_dias'),
            'jornadaPer'=>$request->input('jornada'),
            'gradoPer'=>$request->input('grado')
        ]);

        $this->validate($request,[
            'estamento'=>'required',
            'grado'=>'required',
            'cantidad_de_dias'=>'required',
            'jornada'=>'required',
            'fecha_desde'=>'required',
            'fecha_hasta'=>'required'
        ],[
            'estamento.required'=>'Debe Seleccionar Estamento',
            'grado.required'=>'Debe seleccionar el Grado',
            'cantidad_dias.required'=>'Coloque la cantidad de Dias ',
            'cantidad_dias.Float'=>'Coloque la cantidad de Dias ',
            'jornada.required'=>'Seleccione una Jornada',
            'fecha_desde.required'=>'Seleccione una fecha de inicio',
            'fecha_hasta.required'=>'Seleccione una fecha de termino'
        ]);

       //return back();


    }
}

