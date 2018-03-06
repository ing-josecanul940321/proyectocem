@extends('admin.admin2layout')

@section('script-header')

<link rel="stylesheet" href="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
<style type="text/css">
.btn-file {
	position: relative;
	overflow: hidden;
}
.btn-file input[type=file] {
	position: absolute;
	top: 0;
	right: 0;
	min-width: 100%;
	min-height: 100%;
	font-size: 100px;
	text-align: right;
	filter: alpha(opacity=0);
	opacity: 0;
	outline: none;
	background: white;
	cursor: inherit;
	display: block;
}

#img-upload{
	width: 100%;
}
</style>
@endsection

{{-- YIELDS CON VARIABLES --}}
@section('seccion-admin', 'Crear Noticia')
{{-- --------------------------------------- --}}

@section('ruta-admin')
<a class="box-button" href="#" ><i class="fa fa-home"></i> Home </a><a class="box-button" href="#">&#47 Noticias</a><span style="color: #9d7777;"> &#47 Crear-noticia</span>
@endsection

@section('content')


<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header">
				<div class="col-md-10" style="">
					<h3 class="box-title" style="color: #9d7777;">CREAR NOTICIA</h3>
				</div>
			</div>
			<div class="box-header">
				<div class="col-md-12">
					<hr>
					<div class="row">
						<form action="/admin/seccion-noticias" method="post" name="">
							{{ csrf_field() }}
							<div class="col-md-8">
								<h3 class="box-title" style="color: #9d7777;">Título de la noticia</h3>
								<p>
									<input type="text" name="titulo-noticia" id="" class="form-control" placeholder="Agrega un título">
								</p>
							</div>
							<div class="col-md-8">
								<br>
								<div class="form-group">
									<h3 class="box-title" style="color: #9d7777;">Cargar imagen</h3>
									<div class="input-group">
										<span class="input-group-btn">
											<span class="btn btn-default btn-file">
												Browse… <input type="file" id="imgInp">
											</span>
										</span>
										<input type="text" class="form-control" readonly>
									</div>
									<img id='img-upload'/>
								</div>
							</div>
							<div class="box-body">
								
							</div>
							<div class="col-md-12">
								<h3 class="box-title" style="color: #9d7777;">Texto de la noticia <small> Procuré usar texto claro, sin faltas de ortografía</small></h3>
								{{-- <a data-wysihtml5-action="change_view" href="javascript:;" unselectable="on" class="">switch to html view</a> --}}
							</div><!-- /.box-header -->
							<div class="col-md-12">
								<br>	
								<textarea id="editor1" name="cuerpo_noticia" rows="10" cols="80" placeholder="Por favor, escriba texto aquí">

								</textarea>
							</div>
							<div class="col-md-12">
								<br>
								<button type="submit" class="btn btn-app">
									<i class="fa fa-save"></i> Guardar
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection



@section('script-footer')

<script src="/adminlte/plugins/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
	$(function () {
      	// console.log('hola');
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1');
        //bootstrap WYSIHTML5 - text editor
      //   $(".textarea").wysihtml5({
      //   	toolbar:{
      //   	"html": true,
      //   	"link": false, //Button to insert a link. Default true
    		// "image": false
      //   	}
      //   });
  });
	$(document).ready( function() {
		$(document).on('change', '.btn-file :file', function() {
			var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
			input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {

			var input = $(this).parents('.input-group').find(':text'),
			log = label;

			if( input.length ) {
				input.val(log);
			} else {
				if( log ) alert(log);
			}

		});
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#img-upload').attr('src', e.target.result);
				}

				reader.readAsDataURL(input.files[0]);
			}
		}

		$("#imgInp").change(function(){
			readURL(this);
		}); 	
	});
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.13/vue.js"></script>

@endsection
