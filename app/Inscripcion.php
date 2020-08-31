<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = "gesac.inscripciones";
	protected $primaryKey ='id_inscripcion';
    protected $fillable = ['curso','participante'];   

    public function rel_curso()
    {
        return $this->belongsTo(Curso::class,'curso');
    }
    public function rel_participante()
    {
        return $this->belongsTo(Participante::class,'participante');
    }

}
