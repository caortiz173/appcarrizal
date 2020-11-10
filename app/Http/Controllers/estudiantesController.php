<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiantes;

class estudiantesController extends Controller
{

    public function index()
    {
        $estudiantes = Estudiantes::orderBy('nombres','asc')->where('tipo_persona','=','1')
        ->where('edad','<=','30')->get();
        return [
            'datos'=> $estudiantes
        ];
    }

    public function punto1()
    {
        $estudiantes = Estudiantes::where('genero','=','M')->get();
        return [
            'datos'=> $estudiantes
        ];

    }

    public function punto2()
    {
        $estudiantes = Estudiantes::where('genero','=','F')->get();
        return [
            'datos'=> $estudiantes
        ];

    }

    public function punto3()
    {
        $estudiantes = Estudiantes::where('edad','<=','18')
        ->where('genero','=','M')
        ->where('tp_persona','=','Estudiante')
        ->get();
        return [
            'datos'=> $estudiantes
        ];

    }

    public function punto4()
    {
        $estudiantes = Estudiantes::select('nombres','apellidos','dir','tel')
        ->get();
        return [
            'datos'=> $estudiantes
        ];

    }

    public function punto5()
    {
        $estudiantes = Estudiantes::where('sexo','=','M')
        ->orWhere('sexo','=','F')
        ->get();
        return [
            'datos'=> $estudiantes
        ];

    }

    public function store(Request $request)
    {
        //guardar los datos en el modelo Estudiantes
        $estudiantes = new Estudiantes();
        $estudiantes->tp_doc= $request->tpDoc;
        $estudiantes->num_doc= $request->numDoc;
        $estudiantes->nombres= $request->nombres;
        $estudiantes->apellidos= $request->apellidos;
        $estudiantes->edad= $request->edad;
        $estudiantes->genero= $request->genero;
        $estudiantes->tel= $request->tel;
        $estudiantes->dir= $request->dir;
        $estudiantes->email= $request->email;
        $estudiantes->tp_persona= $request->tppersona;

        $estudiantes->save();
        
    }

   
    public function update(Request $request)
    {
        //act
        
        //$estudiantes = Estudiantes::fileinodOrfail(request->id);
    }


    public function destroy($id)
    {
        //
    }
}
