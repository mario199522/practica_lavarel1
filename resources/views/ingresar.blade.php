<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>ingresar datos</title>
</head>
<body>




<center><h1><strong>Registro de Alumnos</strong></h1></center>
<div class="container">
	<form action="{{url('/mostrar')}}" method="POST" accept-charset="utf-8">

        {{csrf_field()}} 

		<div class="form-group row">
			<label class="col-form label">Cedula</label>
			<div class="col-sm 10">
				<input type="text" name="cedula" placeholder="" autocomplete="off">
			</div>
		</div>
        
        <div class="form-group row">
			<label class="col-form label">Nombre</label>
			<div class="col-sm 10">
				<input type="text" name="nombre" placeholder="" autocomplete="off">
			</div>
		</div>


		<div class="form-group row">
			<label class="col-form label">Apellido</label>
			<div class="col-sm 10">
				<input type="text" name="apellido" placeholder="" autocomplete="off">
			</div>
		</div>
     
     <div class="form-group row">
			<label class="col-form label">promedio</label>
			<div class="col-sm 10">
				<input type="text" name="promedio" placeholder="" autocomplete="off">
			</div>
		</div>
 <br>
 <br>
 <br>

		<div class="form-group row">
			
			<div class="col-sm 10">
				<button type="submit" name="ingresar">Ingresar Datos</button>
			</div>
		</div>
	</form>
</div>










</body>
</html>