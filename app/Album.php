<?php
namespace pruebalaravel;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	
	protected $connection = 'comments';


	protected $table = 'albumes';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'nombre', 'descripcion', 'usuario_id'];

}
