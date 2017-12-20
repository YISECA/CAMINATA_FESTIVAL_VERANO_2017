<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Form extends Model

{

   protected $table = 'caminata_navidad';
   

   public function fechas()
   {
       return $this->belongsTo('App\Fechas','fecha');
   }
}



