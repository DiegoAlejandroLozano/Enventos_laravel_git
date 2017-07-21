<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  </head>
  <body>
   	
   	<div class="container">
   		<div class="row">
   			<div class="col-xs-12 col-sm-6 col-sm-offset-3">
   				
				<h1>Registro de estudiantes </h1>

				<form action="{{ route('registrarEstudiante') }}" method="POST">
				
					{{ csrf_field() }}

					<div class="form-group">
						<label for="nombre">Nombre del Estudiante</label>
						<input type="text" id="nombre" name="nombre" class="form-control" placeholder="nombre">
					</div>

					<div class="form-group">
						<label for="clase">Nombre de la clase</label>
						<input type="text" id="clase" name="clase" class="form-control" placeholder="clase">
					</div>

					<div class="form-group">
						<label for="edad">Edad del estudiante</label>
						<input type="number" id="edad" name="edad" class="form-control" placeholder="Edad">
					</div>

					<div class="form-group">
						<input type="submit" value="Registrar" class="btn btn-primary">
					</div>

				</form>

   			</div>
   		</div>
   	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  </body>
</html>