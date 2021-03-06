<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Curso;
use DB;

class CursosController extends Controller
{
    public function index()
    {

		$tipos = DB::select( DB::raw("

				select 	distinct
								case when a.area_curso like '%IDIOMA%' then 1000 else t.id_tipo_curso end as id_tipo_curso,
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta,
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else replace(t.tipo_curso,' ','_') end as tipo_oferta_min
				from 		gesac.cursos c
								join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
								join gesac.areas_cursos as a on a.id_area_curso =c.area
				where 	c.publicar = 1
				and cast(c.fec_fin_preins as date)>=cast(now() as date)
				order by id_tipo_curso

            "));

		$areas = DB::select( DB::raw("

				select 	distinct
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta,
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else replace(t.tipo_curso,' ','_') end as tipo_oferta_min,
								replace(a.area_curso,'FORMACIÓN EN ','') area_curso,
								replace(replace(a.area_curso,'FORMACIÓN EN ',''),' ','_') area_curso_min
				from 		gesac.cursos c
								join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
								join gesac.areas_cursos as a on a.id_area_curso =c.area
				where 	c.publicar = 1
				and cast(c.fec_fin_preins as date)>=cast(now() as date)

            "));

		$cusos = DB::select( DB::raw("

				select 
				c.curso,
				case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta,
				case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else replace(t.tipo_curso,' ','_') end as tipo_oferta_min,
				a.area_curso,
				replace(replace(a.area_curso,'FORMACIÓN EN ',''),' ','_') area_curso_min,
				concat('http://webdisk.cursos.egpp.gob.bo/sisacademico/oferta/web/',c.url_curso) url_gesac,
				u.nombres coordinador,
				u.tel_movil,
				c.carga_horaria,
				cast(c.fec_ini_curso as date),
				c.duracion,
				c.modalidad,
				c.costo_curso,
				c.tipo_pago,
				t.tipo_curso,
				c.email_infor,
				c.horarios,
				cast(c.fec_fin_preins as date) fec_fin_preins,
				concat('http://webdisk.cursos.egpp.gob.bo/sisacademico/archivos/',c.id_curso,'/',c.link_imagen) url_imagen,
				c.link_imagen
				from 		gesac.cursos c
							join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
							join gesac.areas_cursos as a on a.id_area_curso =c.area
							join gesac.v_usuarios as u on c.usuario_registro = u.id_usuario
				where 	
							c.publicar = 1
				and cast(c.fec_fin_preins as date)>=cast(now() as date)
				order by c.tipo,c.area,c.fec_registro

            "));

		// dd($tipos);
        return view('servicios.oferta.cursos')
        ->with('tipos',$tipos)
        ->with('areas',$areas)
        ->with('cusos',$cusos);
    }

    public function listar_cursos()
    {
    	$cursos=Curso::where('publicar', 1)
    	->where('activo', 1)
    	->where('fec_ini_curso','>', now())
    	->get();
    	
        dd($cursos);
    }

    public function programacion_rrss()
    {
        // dd('hola');
		$tipos = DB::select( DB::raw("

				select 	distinct
								case when a.area_curso like '%IDIOMA%' then 1000 else t.id_tipo_curso end as id_tipo_curso,
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta,
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else replace(t.tipo_curso,' ','_') end as tipo_oferta_min
				from 		gesac.cursos c
								join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
								join gesac.areas_cursos as a on a.id_area_curso =c.area
				where 	c.publicar = 1
				and cast(c.fec_fin_preins as date)>=cast(now() as date)
				order by id_tipo_curso

            "));

    	$cusos = DB::select( DB::raw("

				select
				case when a.area_curso like '%IDIOMA%' then 1000 else t.id_tipo_curso end as id_tipo_curso,
				LTRIM(RTRIM(c.curso)) curso,
				case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta,
				case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else replace(t.tipo_curso,' ','_') end as tipo_oferta_min,
				a.area_curso,
				replace(replace(a.area_curso,'FORMACIÓN EN ',''),' ','_') area_curso_min,
				concat('http://webdisk.cursos.egpp.gob.bo/sisacademico/oferta/web/',c.url_curso) url_gesac,
				u.nombres coordinador,
				u.tel_movil,
				concat('https://api.whatsapp.com/send?phone=591',u.tel_movil,'&text=Requiero%20información%20sobre%20el%20curso%20',REPLACE(c.curso, ' ','%20')) url_wapp,
				c.id_curso,
				c.carga_horaria,
				cast(c.fec_ini_curso as date) fec_ini_curso,
				c.duracion,
				c.modalidad,
				c.objetivo,
				c.costo_curso,
				c.contenido,
				c.tipo_pago,
				t.tipo_curso,
				c.email_infor,
				c.horarios,
				cast(c.fec_fin_preins as date) fec_fin_preins,
				cast(c.fec_registro as date) fec_registro,
				concat('http://webdisk.cursos.egpp.gob.bo/sisacademico/archivos/',c.id_curso,'/',c.link_imagen) url_imagen,
				u.tel_interno,
				c.link_imagen,
				(select count (*) from gesac.inscripciones ins where ins.curso= c.id_curso) inscritos,
				(select count (*) from gesac.v_preinscritos pr where pr.curso= c.id_curso) pre_inscritos
				from 		gesac.cursos c
							join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
							join gesac.areas_cursos as a on a.id_area_curso =c.area
							join gesac.v_usuarios as u on c.usuario_registro = u.id_usuario
				where 	
							c.publicar = 1
				and cast(c.fec_fin_preins as date)>=cast(now() as date)
				order by id_tipo_curso,c.fec_ini_curso

            "));

		// dd($tipos);
        return view('servicios.rrss')
        ->with('tipos',$tipos)
        ->with('cusos',$cusos);
    }







    public function oferta_wapp()
    {

    	$tipos = DB::select( DB::raw("

				select 	distinct
								case when a.area_curso like '%IDIOMA%' then 1000 else t.id_tipo_curso end as id_tipo_curso,
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta,
								case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else replace(t.tipo_curso,' ','_') end as tipo_oferta_min
				from 		gesac.cursos c
								join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
								join gesac.areas_cursos as a on a.id_area_curso =c.area
				where 	c.publicar = 1
				and cast(c.fec_fin_preins as date)>=cast(now() as date)
				order by id_tipo_curso

            "));

    	$cusos = DB::select( DB::raw("

				select
				case when a.area_curso like '%IDIOMA%' then 1000 else t.id_tipo_curso end as id_tipo_curso,
				LTRIM(RTRIM(c.curso)) curso,
				case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else t.tipo_curso end as tipo_oferta,
				case when a.area_curso like '%IDIOMA%' then 'IDIOMAS' else replace(t.tipo_curso,' ','_') end as tipo_oferta_min,
				a.area_curso,
				replace(replace(a.area_curso,'FORMACIÓN EN ',''),' ','_') area_curso_min,
				concat('http://webdisk.cursos.egpp.gob.bo/sisacademico/oferta/web/',c.url_curso) url_gesac,
				u.nombres coordinador,
				u.tel_movil,
				concat('https://api.whatsapp.com/send?phone=591',u.tel_movil,'&text=Requiero%20información%20sobre%20el%20curso%20',REPLACE(c.curso, ' ','%20')) url_wapp,
				c.carga_horaria,
				cast(c.fec_ini_curso as date) fec_ini_curso,
				c.duracion,
				c.modalidad,
				c.costo_curso,
				c.tipo_pago,
				t.tipo_curso,
				c.email_infor,
				c.horarios,
				cast(c.fec_fin_preins as date) fec_fin_preins,
				concat('http://webdisk.cursos.egpp.gob.bo/sisacademico/archivos/',c.id_curso,'/',c.link_imagen) url_imagen,
				u.tel_interno
				from 		gesac.cursos c
							join gesac.tipos_cursos as t on t.id_tipo_curso = c.tipo
							join gesac.areas_cursos as a on a.id_area_curso =c.area
							join gesac.v_usuarios as u on c.usuario_registro = u.id_usuario
				where 	
							c.publicar = 1
				and cast(c.fec_fin_preins as date)>=cast(now() as date)
				order by id_tipo_curso,c.tipo,c.area,c.fec_registro

            "));

		// dd($tipos);
        return view('servicios.oferta_wapp')
        ->with('tipos',$tipos)
        ->with('cusos',$cusos);

    }

    public function finder_cursos(Request $request)
    {
        $term = trim($request->q);

        if (empty($term)) {
            return \Response::json([]);
        }

        // $tags = Trf_Cliente::search($term)->limit(5)->get();
        $tags =DB::select( DB::raw("
           select * 
	   				from gesac.cursos c
			where 	
					c.publicar = 1
			and cast(c.fec_fin_preins as date)>=cast(now() as date)
            and c.curso ilike '%".$term."%'
			order by curso
            "));
       

        $formatted_tags = [];

        foreach ($tags as $tag) {
            $formatted_tags[] = ['id' => $tag->id_curso, 'text' => $tag->curso];
        }

        return \Response::json($formatted_tags);
    }



}
