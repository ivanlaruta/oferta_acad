<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\InscripcionAux;
use DB;


class Servicios extends Controller
{
  
    public function form()
    {
       
       $departamentos =DB::select( DB::raw("select * from gesac.v_departamentos order by 1"));
       $ciudades =DB::select( DB::raw("select * from gesac.v_ciudades order by 4,5"));
       $profesiones =DB::select( DB::raw("select * from gesac.v_profesiones order by 2"));
        return view('servicios.inscripcion.formulario')
            ->with('departamentos',$departamentos)
            ->with('ciudades',$ciudades)
            ->with('profesiones',$profesiones);

    }
    public function form_save(Request $request)
    {
        // dd($request->all());

        $inscripcion = new InscripcionAux();

        $inscripcion -> nombres = $request ->nombres;
        $inscripcion -> paterno = $request ->paterno;
        $inscripcion -> materno = $request ->materno;
        $inscripcion -> fec_nacimiento = $request ->fec_nacimiento;
        $inscripcion -> lugar_nacimiento = $request ->lugar_nacimiento;
        $inscripcion -> sexo = $request ->sexo;
        $inscripcion -> ci = $request ->ci;
        $inscripcion -> exp_depto = $request ->exp_depto;
        $inscripcion -> ciudad_vive = $request ->ciudad_vive;
        $inscripcion -> direccion_vive = $request ->direccion_vive;
        $inscripcion -> tel_fijo = $request ->tel_fijo;
        $inscripcion -> tel_movil = $request ->tel_movil;
        $inscripcion -> email = $request ->email;
        $inscripcion -> profesion = $request ->profesion;
        $inscripcion -> empresa = $request ->empresa;
        $inscripcion -> unidad = $request ->unidad;
        $inscripcion -> cargo = $request ->cargo;


  //       if (in_array("idioma_subv", $request->check)) { 
		// 	$inscripcion -> idioma_subv = 1;
		// 	$inscripcion -> idioma_subv_detalle = $request ->select_idioma1;
		// } 
  //       if (in_array("ofimatica_subv", $request->check)) { 
  //           $inscripcion -> ofimatica_subv = 1;
  //       } 
		// if (in_array("combo2_subv", $request->check)) { 
		// 	$inscripcion -> violencia_subv = 1;
		// 	$inscripcion -> rel_humanas_subv = 1;
		// }
  //       if (in_array("combo_subv", $request->check)) { 
  //           $inscripcion -> ley_004_subv = 1;
  //           $inscripcion -> responsabilidad_subv = 1;
  //       }
		if (in_array("violencia", $request->check)) { 
			$inscripcion -> violencia_desc = 1;
		}
		if (in_array("1178", $request->check)) { 
			$inscripcion -> ley_1178_desc = 1;
		}
		if (in_array("pp", $request->check)) { 
			$inscripcion -> politicas_desc = 1;
		}
		if (in_array("004", $request->check)) { 
			$inscripcion -> ley_004_desc = 1;
		}
		if (in_array("responsabilidad", $request->check)) { 
			$inscripcion -> responsabilidad_desc = 1;
		}
		if (in_array("idioma_desc", $request->check)) { 
			$inscripcion -> idioma_desc = 1;
			$inscripcion -> idioma_desc_detalle = $request ->select_idioma2;
		} 
        
        $inscripcion->save();

    return redirect()->route('inscripcion.form')->with('mensaje',"Correcto.");

    }

    public function validar_ci(Request $request)
    {
        $persona= InscripcionAux::where('ci',$request->ci)->get()->toArray();
        return ($persona);
    }

    public function correos_minedu()
    {
       
       $inscritos = InscripcionAux::all();
        return view('servicios.correos')
            ->with('inscritos',$inscritos);

    }

}
