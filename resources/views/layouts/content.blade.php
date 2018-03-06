<!DOCTYPE html>
<html lang="en">  
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/slideshowVertical.css') }}">
	{{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('normalize/normalize.css') }}">
	@yield('pagecss')
	<style type="text/css">

	/* 
	If the padding property has four values:

    padding: 25px 50px 75px 100px;
        top padding is 25px
        right padding is 50px
        bottom padding is 75px
        left padding is 100px
        */

        div, p, section, article, form, ul, li, input, textarea, h1, h2, h3, h3, span, select, nav{
        	-webkit-transform-origin: left top;
        	-ms-transform-origin: left top;
        	-o-transform-origin: left top;
        	transform-origin: left top;
        }
        body{
        	font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
        	text-align: left;
        	font-size: 14px;
        	line-height: 17px;
        }
        #body_page{
        	max-width: 1024px;
        	/*border:1px black solid;*/
        	/*min-height: 1147px;*/
        	margin:auto;
        	padding: 0px;
        }

        .head{
        	width: 100%;
        }

        .gradient{
        	width: 100%;
        	-webkit-background: gradient(linear, center top, center bottom, from(#DAEAF2),color-stop(100%, #FFFFFF));;
        	-moz-background: gradient(linear, center top, center bottom, from(#DAEAF2),color-stop(100%, #FFFFFF));;
        	-ms-background: gradient(linear, center top, center bottom, from(#DAEAF2),color-stop(100%, #FFFFFF));;
        	-o-background: gradient(linear, center top, center bottom, from(#DAEAF2),color-stop(100%, #FFFFFF));;
        	background: gradient(linear, center top, center bottom, from(#DAEAF2),color-stop(100%, #FFFFFF));;
        	-webkit-background: linear-gradient(top,#DAEAF2 ,#FFFFFF 100%);
        	-moz-background: linear-gradient(top,#DAEAF2 ,#FFFFFF 100%);
        	-ms-background: linear-gradient(top,#DAEAF2 ,#FFFFFF 100%);
        	-o-background: linear-gradient(top,#DAEAF2 ,#FFFFFF 100%);
        	background: linear-gradient(top,#DAEAF2 ,#FFFFFF 100%);
        	-webkit-background: linear-gradient(to bottom,#DAEAF2 ,#FFFFFF 100%);
        	-moz-background: linear-gradient(to bottom,#DAEAF2 ,#FFFFFF 100%);
        	-ms-background: linear-gradient(to bottom,#DAEAF2 ,#FFFFFF 100%);
        	-o-background: linear-gradient(to bottom,#DAEAF2 ,#FFFFFF 100%);
        	background: linear-gradient(to bottom,#DAEAF2 ,#FFFFFF 100%);
        }

        .clearfix{
        	display: block;
        }

        #head-icons{
        	display: inline-block;
        }

        .u-img1{
        	width: 67%;
        	/*border:1px black solid;*/
        }

        .u-img1 a{
        	margin-left: 20px;
        }

        .u-img2, .u-img3{
        	width: 14%;
        	/*border:1px black solid;*/
        	vertical-align: top;
        	padding-top: 30px;
        }

        .u-img3 span{
        	font-size: Verdana;
        	/*border-style: solid;*/
        	display: inline-block;
        	vertical-align: top;
        	margin-top: 10px;
        	line-height: 16px;
        	color: #7F7F7F;
        	font-size: 13px;
        	font-family: Geneva, Verdana, Lucida Sans, Lucida Sans Unicode, sans-serif;
        }

        .figures-000{
        	margin-top: 16px;
        	width: 96.1%;
        	margin-left: 2.2%;
        	/*border:1px black solid;*/
        }

        .figures-001{
        	/*border:1px blue solid;*/
        	display: inline-block;
        }

        .figures-001:nth-child(2), .figures-001:nth-child(3){
        	margin-left:1.2%;
        }

        .title-001{
        	/*border:1px black solid;*/
        	margin-top: 32px;
        	width: 96.1%;
        	margin-left: 1.96%;
        }

        .title-a{
        	/*border:1px black solid;*/
        	background-color: #8CBCD2;
        	/*padding-bottom: 6px;*/
        	width: 66.06%;
        	display: inline-block;
        	/*min-height: 27px;*/
        }

        .title-a p, .title-a-1 p{
        	margin-left: 3%;
        	line-height: 10px;
        	font-size: 18px;
        	letter-spacing: 4px;
        	font-family: arial; 
        	font-weight: 500;
        }

        .title-a p, .title-a a, .title-a-1 p{
        	display: inline-block;
        	-webkit-margin-before: 1em;
        	-webkit-margin-after: 1em;
        	-webkit-margin-start: 0px;
        	-webkit-margin-end: 0px;
        }

        .title-a a{
        	text-decoration: none;
        	letter-spacing: 1px;
        	font-size: .800em;
        	color: #1B1464;
        }

        .title-a a:hover{
        	text-decoration: underline;
        }

        .title-a-1{
        	/*border:1px black solid;*/
        	display: inline-block;
        	vertical-align: top;
        	width: 32.02%;
        	background-color: #8CBCD2;
        	margin-left: 1%;
        	padding-top: .2%;
        }

        .notices-banners{
        	/*border:1px black solid;*/
        	margin-top: 19px;
        	width: 96.1%;
        	margin-left: 1.96%;
        }

        .block-banners{
        	width: 66.06%;
        	/*border:1px black solid;*/
        }

        .block-banners-2{
        	vertical-align: top;
        	width: 32.02%;
        	/*border:1px black solid;*/
        	margin-left: 1%;
        }

        .block-banners,.block-banners-2{
        	display: inline-block;
        }

        .notices{
        	vertical-align: top;
        	/*border:1px black solid;*/
        	margin-top: 5px;
        	width: 315px;
        	display: inline-block;
        	/*position: relative;*/
        }

        .notices:nth-child(2),.notices:nth-child(4){
        	margin-left: 2.2%;
        }

        .notices:nth-child(3),.notices:nth-child(4){
        	-webkit-margin-top: 5%;
        	-moz-margin-top: 5%;
        	-ms-margin-top: 5%;
        	-o-margin-top: 5%;
        	margin-top: 5%;
        }

        .notices figure{
        	/*border:1px blue solid;*/
        	margin:0px;
        	padding: 0px;
        	width: 100%;
        	height: 128px;
        	/*background-color: #D1D6DB;*/
        }

        .notices figure img{
        	width: 100%;
        	height: 100%;
        }

        .notices p{
        	display: block;
        	-webkit-margin-before: 1em;
        	-webkit-margin-after: 1em;
        	-webkit-margin-start: 0px;
        	-webkit-margin-end: 0px;
        }

        #col-notices-title{
        	color: #58595F;
        	font-weight: bold
        }

        #col-notices-text{
        	color: #58595F;
        	text-align: justify;
        }

        .col-vermas{
        	/*border:1px black solid;*/
        	text-align: right;
        }

        .notices a{
			/*position: absolute;
			bottom: -12px;
			right: 0;*/
			text-decoration: none;
			/*text-align: right;*/
			line-height: 18px;
			color:#1B1464;
			font-weight: bold;
			/*padding:10px;*/
		}

		.notices a:hover{
			text-decoration: underline;
			/*border:1px #1B1464 solid;*/
			/*padding:10px;*/
		}

		.navbar-001{
			/*border:1px black solid;*/	
		}

		.sidebar ul{
			margin:0%;
			padding: 0%;
			padding-left: 34px;
			/*width: 100%; */
		}

		.sidebar li{
			list-style-type: circle;
		}

		.sidebar{
			min-height: 26px;
			-webkit-background-color: transparent;
			-moz-background-color: transparent;
			-ms-background-color: transparent;
			-o-background-color: transparent;
			background-color: transparent;
			color: #58595F;
			font-family: Verdana, Tahoma, Geneva, sans-serif;
			margin-top: 8px;
			border-style: solid;
			/*border:1px black solid;*/
			-webkit-border-color: #662d91;
			-moz-border-color: #662d91;
			-ms-border-color: #662d91;
			-o-border-color: #662d91;
			border-color: #662d91;
			padding-bottom: 6px;
			border-width: 0px 0px 1px;
			display: block;
		}

		.sidebar a{
			text-decoration: none;
			color: #58595F;
		}

		.sidebar a:hover{
			text-decoration: underline;
		}

		.banner-001{
			margin-top: 44px;
		}

		.banner-002{
			margin-top: 19px;
		}

		.banner-001, .banner-002{
			display: block;
			background: transparent;
		}

		.footer{
			margin-top: 42px;
			/*border:1px black solid;*/
			background-color: #8CBCD2;
			/*height: 220px;*/
		}

		.footer article{
			/*border:1px black solid;*/
			display: inline-block;
		}

		.footer article:nth-child(1){
			width: 56.06%;
			padding-top: 13px;
		}

		.footer article:nth-child(1) div{
			min-height: 106px;
			/*border:1px black solid;*/
			line-height: 20px;
			color: #58595F;
			font-size: 13px;
			font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
			width: 60.13%;
			margin-left: 5%;
		}

		.footer article:nth-child(1) div p{
			display: block;
			-webkit-margin-before: 1em;
			-webkit-margin-after: 1em;
			-webkit-margin-start: 0px;
			-webkit-margin-end: 0px;
			margin: 0px;
		}

		.footer article:nth-child(1) div p:nth-child(7){
			margin-top: 7%;
		}

		.images-003{
			/*width: 2.93%;*/
			width: 8%;
		}

		.images-003-1{
			margin-left:3%;
		}

		.footer article:nth-child(2){
			width: 43.06%;
			vertical-align: top;
		}

		.form-input00 input{
			display: block;
			padding: 6px;
			margin-top:6%;
			font-style: italic;
			border-style: solid;
			border-width: 1px;
			border-color: #0071BC;
			background-color: #D1D6DB;
			/*line-height: 14px;*/
			color: #7F7F7F;
			font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
		}

		.form-input01 textarea{
			margin-top: 4%;
			padding: 6px;
			display: block;
			font-style: italic;
			border-style: solid;
			border-width: 1px;
			-webkit-border-color: #0071bc;
			-moz-border-color: #0071bc;
			-ms-border-color: #0071bc;
			-o-border-color: #0071bc;
			border-color: #0071bc;
			background-color: #D1D6DB;
			color: #7F7F7F;
			font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
		}

		.form-input01 input{
			display: block;
			margin-left:40%;
			margin-top: 2%;
			/*border:1px black solid;*/
			cursor: pointer;
			height: 30px;
			width: 60.72%;
			padding: 7px 0px 0px;
		}


		.form-input01 input{
			border-style: solid;
			border-width: 1px;
			border-color: #0071BC;
			background-color: transparent;
			border-radius: 2px;
			line-height: 14px;
			text-align: center;
			color: #2E3192;
			font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
		}

		.form-input00,.form-input01{
			display: inline-block;
			vertical-align: top;
			/*border:1px black solid;*/
		}

		.row-icons{
			/*border:1px black solid;*/
			padding: 1%;
			text-align: right;
		}

		.row-icons a{
			color: #58595F;
			text-decoration: none;
			margin-right: 2%;
		}

		.row-icons a:hover{
			text-decoration: underline;
		}

		.row-icons i{
			margin-right: .5%;
		}

		/*MENU SUBMENUS*/

		.navbar{
			z-index: 1;
		}

        .navegacion{
        	/*border:1px black solid;*/
        	height: 32px;
        	margin-left:2%;
        	padding-bottom: 2%;
        }

		.navegacion li{
			list-style: none;
		}

		.menu{
			padding: 0px;
			margin:0px;
			display: flex;
		}

		.menu > li{
			display: inline-block;
			position: relative;
			/*border:1px black solid;*/
		}

		.menu > li > a{
			border-width: 0px 1px 0px 0px;
		}

		.submenu002 li a{
			border-width: 1px 0px 0px 0px;
		}

		.menu > li > a, .submenu002 li a{
			/*border:1px black solid;*/
			display: block;
			text-decoration: none;
			padding: 12.5px;
			border-style: solid;
        	-webkit-border-color: #D1D6DB;
        	-moz-border-color: #D1D6DB;
        	-ms-border-color: #D1D6DB;
        	-o-border-color: #D1D6DB;
        	border-color: #D1D6DB;
        	border-color: #D1D6DB;
        	-webkit-background-color: #FFFFFF;
        	-moz-background-color: #FFFFFF;
        	-ms-background-color: #FFFFFF;
        	-o-background-color: #FFFFFF;
        	background-color: #FFFFFF;
        	-webkit-font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
        	-moz-font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
        	-ms-font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
        	-o-font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
        	font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
        	color: #7F7F7F;
        	line-height: 14px;
        	font-size: 11.5px;
		}

        .menu > li > a:hover, .submenu002 li a:hover{
        	-webkit-background-color: #DAEAF2;
        	-moz-background-color: #DAEAF2;
        	-ms-background-color: #DAEAF2;
        	-o-background-color: #DAEAF2;
        	background-color: #DAEAF2;
        	transition: all .3s;
        }

        .submenu002{
        	position: absolute;
        	padding: 0%;
        	margin:0%;
        	width: 100%;
        	display: none;
        }

        .menu li:hover .submenu002{
        	display: block;
        	z-index: 1;
        }

        .active{
        	-webkit-background-color: #DAEAF2 !important;
        	-moz-background-color: #DAEAF2 !important;
        	-ms-background-color: #DAEAF2 !important;
        	-o-background-color: #DAEAF2 !important;
        	background-color: #DAEAF2 !important;
        }
	</style>
</head>
<body>
	{{-- todo el indelx --}}
	<section id="body_page">
		<div class="head">
			<div class="gradient">
				<div id="head-icons" class="u-img1"><a href="/">
					<img src="{{ asset('images/logotransparente.png') }}"></a>
				</div>
				<div id="head-icons" class="u-img2"><a href="https://www.facebook.com/cemsureste/">
					<img src="{{ asset('images/mesa-de-trabajo-2@2x.png') }}"></a>
				</div>
				<div id="head-icons" class="u-img3">
					<img src="{{ asset('images/mesa_de_trabajo 8@2x.png') }}"> <span>920.40.40</span></a>
				</div>
			</div>
		</div>

		<div class="">
			@yield('slide')
		</div>

		<div class="navbar">
			<nav class="navegacion">
				<ul class="menu">
					<li><a @if (request()->is('/')) class="active" @endif href="{{ url('/') }}">Inicio</a></li>
					<li><a href="{{ url('/centro-medico') }}">Centro Médico</a></li>
					<li><a href="{{ url('servicio-medico') }}">Servicio Médico</a></li>
					<li><a href="{{ url('/especialidades') }}">Especialidades</a></li>
					<li><a @if (request()->is('medicos') || request()->is('enfermeria') || request()->is('enfermeria/*')) class="active" @endif href="{{ url('medicos') }}">Personal Médico</a>
						<ul class="submenu002">
							<li><a href="{{ url('medicos') }}">Médicos</a></li>
							<li><a href="{{ url('enfermeria') }}">Enfermeras</a></li>
						</ul>
					</li>
					<li><a href="#">Servicios</a></li>
					<li><a href="#">Capacitación</a></li>
					<li><a href="#">Promociones</a></li>
					<li><a href="#">+Salud</a></li>
					<li><a href="#">Videos</a></li>
					<li><a href="#">Contacto</a></li>
				</ul>
			</nav>
		</div>

		<div class="clearfix">
			@yield('contents')
		</div>

		<section class="footer">
			<article>
				<div>
					<img src="{{ asset('images/u912-4.png') }}">
					<p>Calle 60 #329 B entre 35 y Av. Colón.</p>
					<p>Mérida Yucatán México</p>
					<p>CP 97000</p>
					<p>Tel. (999) 920 40 40</p>
					<p>cemsureste@cemsureste.com</p>
					<p>
						<a href="">
							<img class="images-003" src="{{ asset('images/mesa-de-trabajo-2@2x.png') }}"></a>
							<a href="">
								<img class="images-003 images-003-1" src="{{ asset('images/mesa-de-trabajo-5@2x.png') }}">
							</a>
						</p>
					</div>
				</article>
				<article>
					<form>
						<div class="form-group">
							<div class="form-input00">
								<input type="text" placeholder="Nombre" name="Nombre" class="">
								<input type="text" placeholder="Email" name="Email" class="">
								<input type="text" placeholder="Asunto" name="Asunto" class="">
							</div>
							<div class="form-input01">
								<textarea name="Mensaje" id="" cols="37" rows="5" class="" placeholder="Escriba su mensaje"></textarea>
								<input type="submit" name="" value="Enviar">
							</div>
						</div>
					</form>
				</article>
				<div class="row row-icons">
					<div class="col">
						<a href="{{ url('/login') }}"><i class="fa fa-user"></i><span>Login</span></a>
					</div>
				</div>
			</section>

		</section>

		@yield('scripts')

		{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
		

	</body>
	</html>