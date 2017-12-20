<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fechas extends Model
{
    //
  protected $table = 'fecha_caminata';

  public function fechas(){
	
	return $this->hasMany('App\Fechas','fecha');

   }

}

