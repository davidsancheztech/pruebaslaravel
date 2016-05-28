 <ul>
	@foreach($productos as $producto)
	<li>{{$producto['name']}}, <a href="{{ url('/actualizar', $producto['id']) }}">Editar</a></li>
	@endforeach
</ul>