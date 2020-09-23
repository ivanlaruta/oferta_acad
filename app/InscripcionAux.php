<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InscripcionAux extends Model
{
    protected $table = "gesac.postulaciones_minedu";
	// protected $primaryKey ='id_postulante';
	protected $fillable = ['id_postulante','nombres','paterno','materno','fec_nacimiento','lugar_nacimiento','sexo','ci','exp_depto','ciudad_vive','direccion_vive','tel_fijo','tel_movil','tel_fax','email','profesion','empresa','cargo','nivel_cargo','fec_alta','activo','ci_explicativo'];   
	public $incrementing=false;
	public $timestamps = false;

}


