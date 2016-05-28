<?php

namespace pruebalaravel;

use Illuminate\Database\Eloquent\Model;

class Entries extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'entries';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'user_id', 'category_id', 'title', 'content'];

	
	public function propietario()
	{
		return $this->belongsTo('pruebalaravel\Categories', 'category_id', 'id');
	}
	
}
