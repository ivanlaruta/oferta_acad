<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "gesac.cursos";
    protected $primaryKey ='id_curso';
    protected $fillable = ['area','tipo'];   

	public function rel_area()
    {
    	return $this->belongsTo('App\Area','area');
    } 

	public function rel_tipo()
    {
        return $this->belongsTo('App\Tipo','tipo');
    }
}
