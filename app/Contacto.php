<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = "gesac.contactos";
	// protected $primaryKey ='id_postulante';
	protected $fillable = [];   
	public $incrementing=false;
	public $timestamps = false;
}
