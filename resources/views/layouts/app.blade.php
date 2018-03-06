<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Login</title>
	<!-- Website Font style -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
	{{-- css --}}
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<style type="text/css">
		body,html{
			height: 100%;
			background-repeat: no-repeat;
			background-color: #d3d3d3;
			font-family: 'Oxygen', sans-serif;
		}

		.main{
			margin-top: 70px;
		}

		h1.title{
			font-size: 50px;
			font-family: 'Passion One', cursive;
			font-weight: 400;
		}

		hr{
			width: 10%;
			color: #fff; 
		}

		.form-group{
			margin-bottom: 15px;
		}

		label{
			margin-bottom: 15px;
		}

		input, input::-webkit-input-placeholder{
			font-size: 11px;
			padding-top: 3px;
		}

		.main-login{
			background-color: #fff;
			-webkit-border-radius: 2px;
			-moz-border-radius: 2px;
			-ms-border-radius: 2px;
			-o-border-radius: 2px;
			border-radius: 2px;
			-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		}

		.main-center{
			margin-top:30px;
			margin:0 auto;
			max-width: 330px;
			padding:40px 40px;
		}

		.login-button{
			margin-top: 5px;
		}

		.login-register{
			font-size:11px;
			text-align: center;
		}


	</style>
</head>
<body>

	<div class="container">
		@yield('content')
	</div>

</body>
</html>