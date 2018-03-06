@extends('layouts.content')

@section('title', '2 | CEMSureste')



@section('contents')
<div class="container">

	<div class="row">
		<div class="col-sm-8" style="border:0px black solid;">
			<div class="row">
				<div class="col-sm-12">
					<figure class="figure004">
						<img src="{{ asset('images/clinica3.jpg') }}">
					</figure class="figure004">
				</div>
			</div>

			<div class="row">
				<div class="col-sm-9">
					<h3 id="show-id-notices">(HPA) HERIDAS POR ARMA BLANCA EN EL CORAZON</h3>
					<div>
						<hr>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					<p id="id-parrafos">
						El pasado jueves 26 de enero, en el Auditorio del CEM, se llevó a cabo la primera Jornada Médica Intrahospitalaria del año con el tema (HPA) Heridas por arma blanca en el corazón y grandes vasos del mediastino, a cargo del Dr. José Roberto Mejides Díaz; especialista en Cirugía General y Cirugía Cardiovascular, actualmente Coordinador del área de Urgencias Médicas.
						<br><br>
					En la antigüedad se consideraba mortal toda herida del corazón, especialmente si había sido producida por la penetración de un objeto punzo – cortante. El desarrollo de la cirugía mayor estuvo detenido durante siglos por falta de conocimientos y tecnología hasta que a mediados del siglo XIX surge el éter y el cloroformo. Estos grandes anestésicos hicieron posible el desarrollo en la cirugía y crearon un gran interés en la preparación de las heridas cardiacas. Inmediatamente se llevaron a cabo en Europa investigaciones dirigidas a la reparación de heridas al corazón en el laboratorio animal. Se informaron pronto en la literatura médica las primeras intervenciones en los humanos.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<a href="{{ url('noticias') }}"><i class="fa fa-arrow-left"></i> TODAS LAS NOTICIAS</a>
				</div>
			</div>
		</div>


		<div class="col-sm-4" style="border:0px black solid;">
			<div class="row">
				<article class="banner-001">
					<a href=""><img src="{{ asset('images/btn_mcabecera.jpg') }}" alt="mcabecera"></a>
				</article>
				<article class="banner-002">
					<a href=""><img src="{{ asset('images/btn_amexcare.jpg') }}" alt="amexcare"></a>
				</article>
			</div>	
		</div>
	</div>
</div>
@endsection



@section('pagecss')
<link rel="stylesheet" type="text/css" href="{{ asset('css/datesnotices.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
@endsection