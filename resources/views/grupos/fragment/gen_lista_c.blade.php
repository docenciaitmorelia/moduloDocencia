@extends('layout')

@section('content')
	<h3>Generar lista de tutores de círculos de estudios</h3>
	<form action="crear_lista_c" method="POST" class="form">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="col-md-4 form-group">
			<label for="semestre" class="control-label">Semestre</label>
			<select id="semestre" name="semestre" class="form-control">
				<option value="">Seleccione semestre</option>
				<option value="E-J">ENERO-JUNIO</option>
				<option value="A-D">AGOSTO-DICIEMBRE</option>
			</select>
		</div>

			<p class="col-md-12 form-group">
				<button type="submit" class="btn btn-raised btn-primary">Generar Lista</button>
				<a href="{{ route('titulacions.index') }}" class="btn btn-raised btn-primary">Regresar</a>
			</p>
	</form>
@endsection