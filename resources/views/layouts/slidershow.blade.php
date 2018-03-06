@extends('index')

@section('slider')
<div id="jssor_1" class="jssor-1">
	<!-- Loading Screen -->
	<div data-u="loading" class="jssorl-009-spin jssorl009">
		<img src="images/spin.svg" />
	</div>
	<div data-u="slides" class="jssor-slides">
		<div data-p="170.00">
			<img data-u="image" src="images/portada01.jpg" />
		</div>
		<div data-p="170.00">
			<img data-u="image" src="images/portada04.jpg" />
		</div>
		<div data-p="170.00">
			<img data-u="image" src="images/portada05.jpg" />
		</div>
		<div data-p="170.00">
			<img data-u="image" src="images/portada3.jpg" />
		</div>
	</div>
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

		var MAX_WIDTH = 980;

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