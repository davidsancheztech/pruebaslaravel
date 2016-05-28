@extends('master')

@section('sidebar')
		{{$dato['dato_prueba']}}
@endsection

@section('content')
    <p>Este es el contenido</p>

	@if (Session::has('actualizado'))
		<div class="alert alert-success">
			{{Session::get('actualizado')}}
		</div>
	@endif
					    
     @include('listado')
@endsection