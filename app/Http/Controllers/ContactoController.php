<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;

use App\Curso;
use App\Participante;
use App\Inscripcion;
use DB;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        // $cursos=Curso::select('id_curso','curso')->where('publicar',1)->whereRaw( 'cast(fec_fin_preins as date)>=cast(now() as date)')->get();

                $areas = DB::select( DB::raw("

                select  distinct
                                case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta
                           
                from        gesac.cursos c
                                join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
                                join gesac.areas_cursos as a on a.id_area_curso =c.area
                where   c.publicar = 1
                and cast(c.fec_fin_preins as date)>=cast(now() as date)
                order by 1
            "));

        $cursos = DB::select( DB::raw("

                select 
                c.id_curso,
                c.curso,
                case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta
                
                from        gesac.cursos c
                            join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
                            join gesac.areas_cursos as a on a.id_area_curso =c.area
                            join gesac.v_usuarios as u on c.usuario_registro = u.id_usuario
                where   
                            c.publicar = 1
                and cast(c.fec_fin_preins as date)>=cast(now() as date)
                order by c.tipo,c.area,c.fec_registro

            "));

        return view('cms.contacto.form')->with('areas',$areas)->with('cursos',$cursos);

    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
