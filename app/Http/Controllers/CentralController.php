<?php 
namespace pruebalaravel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use pruebalaravel\Productos\Productos;
use pruebalaravel\Album;

class CentralController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex($id = NULL, $prueba = NULL)
	{
		var_dump($id, $prueba);
		$productos = new Productos;
		$productos = $productos->listado();

		return view('child', 
			[
				'titulo' => 'Título de la página',
				'dato' => array('dato_prueba'=>'ejemplo de dato prueba'),
				'productos' => $productos,
			]
		);
	}

	public function getActualizar($id)
	{
		$album = Album::find($id);

		/*
		$album->id
		$album->nombre
		$album->descripcion
		 */
		
		return view('formAlbum',
			[
				'album' => $album,
			]
		);
	}

	public function postActualizar(Request $request)
	{
		$album = Album::find($request->get('id'));

		$album->nombre = $request->get('nombre');
		$album->descripcion = $request->get('descripcion');

		$album->save();

		return redirect('/')->with('actualizado','El albúm se actualizó');
	}	
}
