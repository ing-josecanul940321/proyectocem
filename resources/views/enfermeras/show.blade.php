@extends('layouts.content')

@section('title', 'Dra. Beatriz Adriana Baeza Gamboa | CEMSureste')

@section('pagecss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datesmedicos.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
@endsection

@section('contents')
<div class="container">
	<hr>
	<div class="row">
		<div class="col-md-12">
			<h3 class="title-perfil">PERFIL ENFERMERA</h3>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-2" style="">
			<figure class="figura-idmedico"><img src="{{ asset('upload/enfermera1.jpg') }}" alt=""></figure>
		</div>
		<div class="col-md-8">
			<h4><strong>Dra. Beatriz Adriana Baeza Gamboa</strong></h4>
			<h4><strong>Especialidad:</strong> Alergología</h4>
			<hr>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<p><strong>Consultorio:</strong> 21</p>
			<p><strong>Correo:</strong> jbvcmeir@prodigy.net.mx</p>
			<p><strong>Telefono:</strong> 9 20 40 40, ext. 1057</p>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-md-4">
			<a href="{{ url('enfermeria') }}"><i class="fa fa-arrow-left"></i> BUSCA A TU ENFERMERA</a>
		</div>
	</div>
</div>
@endsection