<?php

namespace JuegoPri\Models;

use Illuminate\Database\Eloquent\Model;

class Partidos extends Model
{
    //
    protected $table='partidos';
    protected $primarykey='id';

    protected $fillable=[
	'id','contrincante','fecha_hora','jugado','fecha_liga','resultado','gol_favor','gol_contra'
	];

	public function jugadores()
	{
		//tiene 1 o muchos jugadores
		return $this->hasmany(Jugadores::class);

	}

}
