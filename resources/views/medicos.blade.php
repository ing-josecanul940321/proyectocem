@extends('layouts.content')

@section('title', 'Medicos | CEMSureste')

@section('pagecss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/medicos.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
@endsection

@section('contents')
<div class="container">
	<div class="row">
		<div class="col-md-5">
			<h3 class="title-medicos" style="">BUSCA A TU DOCTOR</h3>
		</div>
		<div class="col-md-7">
			<form action="" class="">			
				<div class="row">						
					<div class="col-md-8">
						<div class="form-group">
							<label for="apellido">BÚSQUEDA POR APELLIDO</label>
							<input type="text" name="apellido-medico" id="" class="form-control" placeholder="Apellido">
						</div>
					</div>
					<div class="col-md-3" id="btn-buscar" style="">
						<div class="form-group">
							<input type="submit" value="BUSCAR" class="btn btn-default">
						</div>
					</div>		
				</div>
				<hr>
				<div class="row">
					<div class="col-md-8">
						<div class="form-group">
							<label for="especialidad-medico">BÚSQUEDA POR ESPECIALIDAD</label>
							<select name="especialidad" id="exampleselect1" class="form-control">
								<option selected>Seleccione</option>
								<option value="">Alergología</option>
								<option value="">Algología</option>
								<option value="">Audiología</option>
								<option value="">Cardiología</option>
								<option value="">Cirugía Plástica</option>
								<option value="">Endoscopia</option>
							</select>
						</div>
					</div>
					<div class="col-md-3" id="btn-buscar">
						<input type="submit" value="BUSCAR" class="btn btn-default">
					</div>
				</div>
			</form>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-12">
			<h3 class="title-medicos002">RESULTADO DE LA BÚSQUEDA</h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-6 busqueda001">
			<div class="row">
			<div class="col-md-4">
			<figure class="figura-medico"><img src="{{ asset('upload/medico1.jpg') }}" alt=""></figure>
			</div>
			<div class="col-md-8">
			<h4 id="nombre-medico">Dr. Jorge Bernardo Vargas Correa</h4>
			<hr>
			<p>Especialidad: Alergología</p>
			<p>Telefono: 9 20 40 40, ext. 1057</p>
			<p>Correo:jbvcmeir@prodigy.net.mx</p>
			</div>
			<div class="col-md-12 col-btn001">
				<a class="btn-perfil" href="#">VER PERFIL</a>
			</div>
			</div>
		</div>
		<div class="col-md-6 busqueda001">
			<div class="row">
			<div class="col-md-4">
			<figure class="figura-medico"><img src="{{ asset('upload/medico1.jpg') }}" alt=""></figure>
			</div>
			<div class="col-md-8">
			<h4 id="nombre-medico">Dr. Jorge Bernardo Vargas Correa</h4>
			<hr>
			<p>Especialidad: Alergología</p>
			<p>Telefono: 9 20 40 40, ext. 1057</p>
			<p>Correo:jbvcmeir@prodigy.net.mx</p>
			</div>
			<div class="col-md-12 col-btn001">
				<a class="btn-perfil" href="#">VER PERFIL</a>
			</div>
			</div>
		</div>
		<div class="col-md-6 busqueda001">
			<div class="row">
			<div class="col-md-4">
			<figure class="figura-medico"><img src="{{ asset('upload/medico1.jpg') }}" alt=""></figure>
			</div>
			<div class="col-md-8">
			<h4 id="nombre-medico">Dr. Jorge Bernardo Vargas Correa</h4>
			<hr>
			<p>Especialidad: Alergología</p>
			<p>Telefono: 9 20 40 40, ext. 1057</p>
			<p>Correo:jbvcmeir@prodigy.net.mx</p>
			</div>
			<div class="col-md-12 col-btn001">
				<a class="btn-perfil" href="#">VER PERFIL</a>
			</div>
			</div>
		</div>
		<div class="col-md-6 busqueda001">
			<div class="row">
			<div class="col-md-4">
			<figure class="figura-medico"><img src="{{ asset('upload/medico1.jpg') }}" alt=""></figure>
			</div>
			<div class="col-md-8">
			<h4 id="nombre-medico">Dr. Jorge Bernardo Vargas Correa</h4>
			<hr>
			<p>Especialidad: Alergología</p>
			<p>Telefono: 9 20 40 40, ext. 1057</p>
			<p>Correo:jbvcmeir@prodigy.net.mx</p>
			</div>
			<div class="col-md-12 col-btn001">
				<a class="btn-perfil" href="#">VER PERFIL</a>
			</div>
			</div>
		</div>
		<div class="col-md-6 busqueda001">
			<div class="row">
			<div class="col-md-4">
			<figure class="figura-medico"><img src="{{ asset('upload/medico1.jpg') }}" alt=""></figure>
			</div>
			<div class="col-md-8">
			<h4 id="nombre-medico">Dr. Jorge Bernardo Vargas Correa</h4>
			<hr>
			<p>Especialidad: Alergología</p>
			<p>Telefono: 9 20 40 40, ext. 1057</p>
			<p>Correo:jbvcmeir@prodigy.net.mx</p>
			</div>
			<div class="col-md-12 col-btn001">
				<a class="btn-perfil" href="#">VER PERFIL</a>
			</div>
			</div>
		</div>
		<div class="col-md-6 busqueda001">
			<div class="row">
			<div class="col-md-4">
			<figure class="figura-medico"><img src="{{ asset('upload/medico1.jpg') }}" alt=""></figure>
			</div>
			<div class="col-md-8">
			<h4 id="nombre-medico">Dr. Jorge Bernardo Vargas Correa</h4>
			<hr>
			<p>Especialidad: Alergología</p>
			<p>Telefono: 9 20 40 40, ext. 1057</p>
			<p>Correo:jbvcmeir@prodigy.net.mx</p>
			</div>
			<div class="col-md-12 col-btn001">
				<a class="btn-perfil" href="#">VER PERFIL</a>
			</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 busqueda001">
			<p>No se encontraron resultados. Seleccione una <b>ESPECIALIDAD</b> en específico</p>
		</div>
	</div>
</div>



@endsection