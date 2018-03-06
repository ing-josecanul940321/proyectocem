@extends('layouts.app') 

{{-- layouts es la carpeta y app es el blade --}}

@section('content')
	<div class="row main">
		<div class="panel-heading">
			<div class="panel-title text-center">
				{{-- <h1 class="title">CEMSureste</h1> --}}
				<hr>
			</div>
		</div>
		<div class="main-login main-center">
			<form class="form-horizontal">
				{{-- <div style="margin-left: 10%;">
					<h3 cen>Ingreso al Sistema</h3>
				</div> --}}
				<div class="form-group">
					<label for="name" class="cols-sm-2 control-label">Email o Usuario</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden=true></i>
							</span>
							<input type="text" name="name" id="name" placeholder="Ingresa tu email o usuario" class="form-control" required="">
						</div>
					</div>
				</div>

				<div class="form-group" id="form-pass">
					<label for="password" class="cols-sm-2 control-label">Contraseña</label>
					<div class="cols-sm-10">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden=true></i>
							</span>
							<input type="password" name="password" id="password" class="form-control" placeholder="Ingresa tu contraseña" required="">
						</div>
					</div>
			
					<div class="form-check">
						{{-- mostrar contraseña con checked --}}
						<input type="checkbox" name="" id="gridcheck" class="form-check-input" 
						onchange="document.getElementById('password').type = this.checked ? 'text' : 'password' ">
						Mostrar Contraseña
					</div>
				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Ingresar</button>
				</div>

				<div class="form-group">
					<div class="form-check">
						<input type="checkbox" name="" id="gridcheck" class="form-check-input">
						<label for="gridcheck" class="form-check-label"></label>
						Recordarme
					</div>
					<a href="" class="btn btn-link">¿Has olvidado tu contraseña?</a>
				</div>


				
			</form>
		</div>
	</div>
@endsection