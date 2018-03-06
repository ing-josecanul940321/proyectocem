@extends('admin.admin2layout')

@section('script-header')
<style type="text/css">

.linea001{
	display: none;
}
@media only screen and (max-width: 768px){
	.new-especialidad{
		margin-top: 3%;
	}

	.linea001{
		display: block;
	}
}
</style>

@endsection


{{-- YIELDS CON VARIABLES --}}
@section('seccion-admin', 'Seccion del Personal Médico / Doctores')

{{-- --------------------------------------- --}}

@section('ruta-admin')
<a class="box-button" href="#" ><i class="fa fa-home"></i> Home </a><span style="color: #9d7777;"> &#47 Personal Médico</span>
@endsection


@section('content')

<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<div class="col-md-7" style="">
					<h3 class="box-title" style="color: #9d7777;">Todos los Doctores registrados actualmente</h3>
				</div>
				<div class="col-md-5">
					<a href="#" class="btn btn-info" ><span class="glyphicon glyphicon-plus"></span> Crear Nuevo Registro</a>
					<a href="#" class="btn btn-info new-especialidad" ><span class="glyphicon glyphicon-plus"></span> Crear Nueva Especialidad</a>
				</div>
			</div>
			<div class="box-header">
				<hr>
				<div class="col-md-12" style="">
					<p style="color: #9d7777;">Filtra por números de columnas (lado izquierdo) o busca al personal en la caja de busqueda (lado derecho) </p>
				</div>
				<hr class="linea001">
			</div>	
		</div>
	</div>
</div>


@endsection

@section('script-footer')



@endsection