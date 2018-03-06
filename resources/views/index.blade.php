@extends('layouts.content')

@section('title', 'Inicio | CEMSureste')

@section('slide')
<div id="jssor_1" class="jssor-1">
	<!-- Loading Screen -->
	<div data-u="loading" class="jssorl-009-spin jssorl009">
		<img src="images/spin.svg" />
	</div>
	<div data-u="slides" class="jssor-slides">
		<div data-p="170.00">
			<a href="#"><img data-u="image" src="images/portada01.jpg" /></a>
		</div>
		<div data-p="170.00">
			<a href="#"><img data-u="image" src="images/portada04.jpg" /></a>
		</div>
		<div data-p="170.00">
			<a href="#"><img data-u="image" src="images/portada05.jpg" /></a>
		</div>
		<div data-p="170.00">
			<a href="#"><img data-u="image" src="images/portada3.jpg" /></a>
		</div>
	</div>
</div>
@stop

@section('contents')

<div class="">
	<div class="clearfix figures-000">
		<article class="figures-001">
			<a href="">
				<img src="images/btn_maternidad.jpg" alt="maternidad">
			</a>
		</article>
		<article class="figures-001">
			<a href="">
				<img src="images/btn_imagen.jpg" alt="hiperbarica">
			</a>
		</article>
		<article class="figures-001">
			<a href="">
				<img src="images/btn_hiperbarica.jpg" alt="imagenologia">
			</a>
		</article>
		
	</div>

	<div class="title-001">
		<article class="title-a">
			<p> NOTICIAS <span><a href="{{ url('/noticias') }}"> (Ver todas)</a></span></p>
		</article>
		<article class="title-a-1">
			<p>Nuevos Servicios</p>
		</article>
	</div>

	<section class="notices-banners">
		<div class="block-banners">
			<article class="notices">
				<figure>
					<img src="{{ asset('images/index1.jpg') }}">
				</figure>
				<div class="row">
					<div class="col">
						<p id="col-notices-title">
							Claves para cuidar la alimentación de tus hijos este verano
							{{-- <span style="margin-left: 50%;">18-09-2018</span> --}}
						</p>
						<p id="col-notices-text">
							El compromiso con la salud pública y el alivio de las listas de espera de patologías GES 
						</p>
					</div>
					<div class="w-100"></div>
					<div class="col col-vermas" style="">
						<a href="">Ver Más</a>
					</div>
				</div>
			</article>
			<article class="notices">
				<figure>
					<img src="{{ asset('images/index1.jpg') }}">
				</figure>
				<div class="row">
					<div class="col">
						<p id="col-notices-title">
							Acupuntura
							{{-- <span style="margin-left: 50%;">18-09-2018</span> --}}
						</p>
						<p id="col-notices-text">
							La temporada de verano, puede significar una oportunidad para mejorar los hábitos alimenticios
						</p>
					</div>
					<div class="w-100"></div>
					<div class="col col-vermas">
						<a href="">Ver Más</a>
					</div>
				</div>
			</article>
			<article class="notices">
				<figure>
					<img src="{{ asset('images/index1.jpg') }}">
				</figure>
				<div class="row">
					<div class="col">
						<p id="col-notices-title">
							Claves para cuidar la alimentación de tus hijos este verano
							{{-- <span style="margin-left: 50%;">18-09-2018</span> --}}
						</p>
						<p id="col-notices-text">
							Dormir es clave para el funcionamiento diario de nuestro organismo.
						</p>
					</div>
					<div class="w-100"></div>
					<div class="col col-vermas">
						<a href="">Ver Más</a>
					</div>
				</div>
			</article>
			<article class="notices">
				<figure>
					<img src="{{ asset('images/index1.jpg') }}">
				</figure>
				<div class="row">
					<div class="col">
						<p id="col-notices-title">
							Esterilidad o Infertilidad
							{{-- <span style="margin-left: 50%;">18-09-2018</span> --}}
						</p>
						<p id="col-notices-text">
							La oxitocina, es una hormona que está directamente relacionada con la conducta maternal y paternal, los patrones sexuales y la impulsividad en
						</p>
					</div>
					<div class="w-100"></div>
					<div class="col  col-vermas">
						<a href="">Ver Más</a>
					</div>
				</div>		
			</article>
		</div>
		<div class="block-banners-2">
			<article class="navbar-001">
				<div class="sidebar"><ul><li><a href="" class="links">Resultado de exámenes de Laboratorio</a></li></ul></div>
				<div class="sidebar"><ul><li><a href="" class="links">Vehículo de Traslado</a></li></ul></div>
				<div class="sidebar"><ul><li><a href="" class="links">Nacimientos en el CEM</a></li></ul></div>
				<div class="sidebar"><ul><li><a href="" class="links">Check Up médicos</a></li></ul></div>
				<div class="sidebar"><ul><li><a href="" class="links">Asociación Contacto</a></li></ul></div>
				<div class="sidebar"><ul><li><a href="" class="links">Boletín semanal del CEM</a></li></ul></div>
				<div class="sidebar"><ul><li><a href="" class="links">Crecimiento de nuestro Hospital, CEM</a></li></ul></div>
				<div class="sidebar"><ul><li><a href="" class="links">Videos</a></li></ul>
			</article>
			<article class="banner-001">
				<a href=""><img src="images/btn_mcabecera.jpg" alt="mcabecera"></a>
			</article>
			<article class="banner-002">
				<img src="images/btn_amexcare.jpg" alt="amexcare">
			</article>
		</div>
		</section>
	</div>
	@stop

	@section('scripts')

	<script src="js/jssor.slider-27.0.4.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		console.log("hola");
		jssor_1_slider_init = function() {

			var jssor_1_options = {
				$AutoPlay: 1,
				$DragOrientation: 2,
				$PlayOrientation: 2,
				$Cols: 1,
				$Align: 0,
				$BulletNavigatorOptions: {
					$Class: $JssorBulletNavigator$,
					$Orientation: 2
				}
			};

			var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

			/*#region responsive code begin*/

			var MAX_WIDTH = 1024;

			function ScaleSlider() {
				var containerElement = jssor_1_slider.$Elmt.parentNode;
				var containerWidth = containerElement.clientWidth;

				if (containerWidth) {

					var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

					jssor_1_slider.$ScaleWidth(expectedWidth);
				}
				else {
					window.setTimeout(ScaleSlider, 30);
				}
			}

			ScaleSlider();

			$Jssor$.$AddEvent(window, "load", ScaleSlider);
			$Jssor$.$AddEvent(window, "resize", ScaleSlider);
			$Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
			/*#endregion responsive code end*/
		};
	</script>


	<script type="text/javascript">jssor_1_slider_init();</script>
	<!-- #endregion Jssor Slider End -->

	@stop