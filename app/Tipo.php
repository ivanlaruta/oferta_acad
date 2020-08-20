<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = "gesac.tipos_cursos";
    protected $primaryKey ='id_tipo_curso';
    public $incrementing=false;
    
}
