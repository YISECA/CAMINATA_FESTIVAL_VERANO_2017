<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Form extends Model

{

   protected $table = 'caminata_festival';
   

   public function fechas()
   {
       return $this->belongsTo('App\Fechas','fecha');
   }
}



