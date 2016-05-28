@extends('master')

@section('content')


<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Actualizar perfil</div>
				<div class="panel-body">


{{ Form::open(array('url' => 'actualizar', 'class' => 'form-horizontal')) }}
	<input type="hidden" name="id" value="{{ $album->id }}">
	<div class="form-group">
		{{ Form::label('nombre', 'Nombre', ['class' => 'control-label col-md-4']) }}
		<div class="col-md-6">
			{{ Form::text('nombre', $album->nombre, ['class' => 'form-control']) }}	
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 control-label">Descripcion</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="descripcion" value="{{$album->descripcion}}">
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-4">
			<button type="submit" class="btn btn-primary">
				Actualizar
			</button>
		</div>
	</div>
{{ Form::close() }}


{{--	


		
					<form class="form-horizontal" role="form" method="POST" action="{{ url('actualizar') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{ $album->id }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Nombre</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nombre" value="{{ $album->nombre }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Descripcion</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="descripcion" value="{{$album->descripcion}}">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Actualizar
								</button>
							</div>
						</div>
					</form>
--}}				
				</div>
			</div>
		</div>
	</div>
</div>

@endsection