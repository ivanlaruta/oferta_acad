<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{
    protected $table = "gesac.inscripciones";

    protected $fillable = ['curso'];   

    public function rel_curso()
    {
        return $this->belongsTo(Curso::class,'curso');
    }

}
