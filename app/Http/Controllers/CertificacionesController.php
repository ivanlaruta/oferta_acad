<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use App\Participante;
use App\Inscripcion;
use DB;

class CertificacionesController extends Controller
{
   
    public function ajax_consultar(Request $request)
    {

        $participante=Participante::where('ci',$request->ci)->get();

        if(!empty($participante[0])){
            $id=($participante[0]->id_participante);

            $inscripcion=Inscripcion::where('participante',$id)->orderBy('curso', 'desc')->get();
            return view('certificaciones.pagina_web._ajax_consultar')
            ->with('participante',$participante[0])
            ->with('inscripcion',$inscripcion);

        }
        else
        {
            return("No se encontraron cursos aprobados relacionados");

        }

    }

   public function ajax_verificar(Request $request)
    {

        $participante=Participante::where('ci',$request->ci)->get();

        if(!empty($participante[0])){
            $id=($participante[0]->id_participante);

            $inscripcion=Inscripcion::where('participante',$id)->orderBy('curso', 'desc')->get();
            return view('certificaciones.pagina_web._ajax_verificar')
            ->with('participante',$participante[0])
            ->with('inscripcion',$inscripcion);

        }
        else
        {
            return("No se encontraron cursos aprobados relacionados");

        }

    }

    public function ajax_habilitar(Request $request)
    {

        $estado_cursos = DB::select( DB::raw("

            select
                c.id_curso,
                ltrim(rtrim(c.curso)) curso,
                c.\"version\" ver,
                cast(c.fec_ini_curso as date) fec_ini_curso,
                i.cer_impreso,
                i.cer_fec_impresion,
                i.cer_disponible,
                i.cer_fec_disponible,
               
                i.cantidad
                from (
                SELECT 
                i.curso,
                i.cer_impreso,
                cast(i.cer_fec_impresion as date) cer_fec_impresion,
                i.cer_disponible,
                cast(i.cer_fec_disponible as date) cer_fec_disponible,
                
                count(i.curso) cantidad
                FROM gesac.v_inscripcion i
                where 
                i.cer_aprobado = 1 
                --and  i.cer_impreso = 1
                group by i.curso,
                cer_impreso,
                cast(i.cer_fec_impresion as date),
                i.cer_disponible,
                cast(i.cer_fec_disponible as date)
                
                ) as i
                join gesac.cursos as c on c.id_curso = i.curso
                where c.id_curso = ".$request->id_curso."
            ORDER BY i.cer_fec_impresion desc


            "));
        return view('certificaciones._ajax_habilitar')->with('estado_cursos',$estado_cursos);

    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

    public function update_habilitar(Request $request)
    {
         DB::select( DB::raw("
            update gesac.inscripciones
            set cer_disponible = 1, cer_fec_disponible = now()
            where curso = ".$request->id_curso."
            and cer_impreso = 1
            and (cer_disponible is null or cer_disponible = 0)
            and cast(cer_fec_impresion as date) = '".$request->fecha_impr."'
        "));

        return 1;
        // dd($estado_cursos);
        // dd($request->all());
    }

   
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
