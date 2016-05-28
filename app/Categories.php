<?php

namespace pruebalaravel;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'categories';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'name', 'description'];


	public function entries()
	{
		return $this->hasMany('pruebalaravel\Entries', 'category_id', 'id');
	}
	/*

	public function propietario()
	{
		return $this->belongsTo('GestorImagenes\Usuario');
	}
	*/
}
