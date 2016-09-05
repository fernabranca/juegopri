<?php

namespace JuegoPri\Models;

use Illuminate\Database\Eloquent\Model;

class Jugadores extends Model
{
    //
    protected $table='jugadores';
    protected $primarykey='id';

    protected $fillable=[
	'id','nombre','apellido','dni','matricula_jugador','fecha_nacimiento','direccion','telefono','cod_partido'
	];

	public function partido(){
		//pertenece a un partido
		return $this->belongsto(Partido::class);
	}
}
