<?php

namespace pruebalaravel\Productos;

use DB;
use pruebalaravel\Http\Controllers\Controller;
use pruebalaravel\Categories;
use pruebalaravel\Entries;
use pruebalaravel\Album;

class Productos //abstract
{
    public function listado()
    {
    	//$categories = DB::table('categories')->where('id', '1')->first();
    	
    	$listCategories = array();
		$categories = Album::all();
		
		$propiestario = Entries::find('8')->propietario;
		var_dump($propiestario->name);

		/*
		$entries = Categories::find('7')->entries;
		//$entries = Entries::all();
		foreach($entries as $entry)
			var_dump('id: '.$entry->id.', category_id: '.$entry->category_id.', title: '.$entry->title);
		*/
	
		foreach($categories as $category)
			array_push($listCategories, array(
						'id' => $category->id,
						'name' => $category->nombre,
					));

        return $listCategories;
    } 
}
