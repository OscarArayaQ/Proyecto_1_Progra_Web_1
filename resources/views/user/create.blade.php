@extends('layouts.master')
@section('content')
<header id="header">		
	<div id="usuario">
		<a id="volver_login" href="Bandeja de Salida.html" title = "Devolverse a bandeja de salida">
		 <!--img src="imagenes/devolver.png" whidth="50" height="50"--> 
		</a>
	</div>
</header>
<div class = "contenedor_general">
	<div class="opciones">
		<ul>
			<li><a id="boton_especial" href="Registro_de_Usuarios.html"> SALIDA </a></li>
			<li><a id="boton" href="#"> ENVIADOS </a></li>				
		</ul>
	</div>
	<div class = "minicontenedor">
		<div id= "descripcion">
			<h2> REGISTRO DE USUARIO </h2>					
		</div>
	</div>
	<form id = "new_usuario" action="/user" method="POST">

		<input name="_token" hidden value="{!! csrf_token() !!}" />

		<h3> Nombre de Usuario o correo electronico </h3>
		<input id="usuario" type="text" name="user_name" placeholder="Escriba su nombre de usuario o correo">
		<h3> Contraseña </h3>
		<input id="contrasenna" type="password" name="contrasenna" placeholder="Escriba su contraseña"/>
		<h3> Repetir contraseña </h3>
		<input id="Rcontrasenna" type="password" name="contrasenna2" placeholder="Repita su contraseña"/>
		<input id="boton_registro" value="Guardar" type="submit">
		<a id = "boton_registro"> Cancelar </a>
	</form>
</div>	
@endsection