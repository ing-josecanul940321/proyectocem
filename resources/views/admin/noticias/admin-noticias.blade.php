@extends('admin.admin2layout')

@section('script-header')
<link rel="stylesheet" type="text/css" href="{{ asset('css/notices.css') }}">

<style type="text/css">
.col-sm4-bg{
	margin-bottom: 2%;
	/*border:.5px #9d7777 solid !important;*/
}

.btn-success{
	margin-left: 2%;
}
</style>
@endsection

{{-- YIELDS CON VARIABLES --}}
@section('seccion-admin', 'Noticias')

{{-- --------------------------------------- --}}

@section('ruta-admin')
<a class="box-button" href="#" ><i class="fa fa-home"></i> Home </a><span style="color: #9d7777;"> &#47 Noticias</span>
@endsection

@section('content')
<div class="col-md-12">
	<div class="box box-primary">
		<div class="box-header">
			<div class="col-md-10" style="">
				<h3 class="box-title" style="color: #9d7777;">Todas las noticias actualmente registrados</h3>
			</div>
			<div class="col-md-2">
				<a href="{{ url('admin/seccion-noticias/create') }}" class="btn btn-info" ><span class="glyphicon glyphicon-plus"></span> Crear Noticia</a>
			</div>
		</div>
		<div class="box-header">
			<div class="col-sm-12" style="border:0px blue solid;">
				<hr>
				<div class="row">
					<div class="col-sm-4">
						<form class="form-group" action="">
							<label for="busquedafecha">Busqueda por fecha:</label>
							<div class="input-group date">
								{{-- <input type="text" class="form-control" placeholder="dd/mm/yyyy"> --}}
								<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
								<span class="input-group-addon">
									<i class="glyphicon glyphicon-th"></i>
								</span>
								<span class="input-group-btn">
									<button class="btn btn-default" type="submit">Buscar</button>
								</span>
							</div>
						</form>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
							<form>
								<button type="button" class="btn btn-danger">ELIMINAR</button>
								<button class="btn btn-success">EDITAR</button>
							</form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
					<div class="col-sm-3 col-sm4-bg" style="border:0px black solid;">
						<div class="col" style="border:0px black solid;">
							<figure class="figuresN001">
								<img src="{{ asset('images/clinica3.jpg') }}" alt="">
							</figure>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>ID: 1</p>
							<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
						</div>
						<div class="w-100"></div>
						<div class="col" style="border:0px black solid;">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p><form><button type="submit" class="btn btn-danger">ELIMINAR</button><button class="btn btn-success">EDITAR</button></form>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-8 pagination">
						paginacion
					</div>
				</div>
			</div>
		</div>
	</div>
</div>



@endsection


@section('script-footer')

<script type="text/javascript" src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="/adminlte/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="/adminlte/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="/adminlte/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="/adminlte/plugins/datepicker/datepicker3.css">

<script>
	 //Datemask dd/mm/yyyy
	 $(function () {
	 	 //Datemask dd/mm/yyyy
        $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
        $("[data-mask]").inputmask();
	 });
	 $('.input-group.date').datepicker({
	 	language: "es",
	 	format: "dd/mm/yyyy"
	 });
	</script>
	@endsection