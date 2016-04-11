@extends('layouts.master')
@section('content')
<header id="header">
    <div id="usuario">
        <a id="volver_login" href="Bandeja de Salida.html" title="Devolverse a bandeja de salida"> <IMG
                    src="imagenes/devolver.png" whidth="50" height="50"> </a>
    </div>
</header>
<div class="contenedor_general">
    <div class="opciones">
        <ul>
            <li><a id="boton_especial" href="Bandeja de Salida.html"> SALIDA </a></li>
            <li><a id="boton" href="Enviados.html"> ENVIADOS </a></li>
        </ul>
    </div>
    <div class="minicontenedor">
        <div id="descripcion">
            <h2> CORREO NUEVO </h2>
        </div>
    </div>
    <form id="correo_nuevo" action="/correo" method="POST">
        <input name="_token" hidden value="{!! csrf_token() !!}" />
        <h3> Para : </h3>
        <input class="nuevo" id="email" type="email" name="correo" multiple required placeholder="Destinatario"/>
        <h3> Asunto : </h3>
        <input class="nuevo" id="asunto" type="asunto" name="nuevo" placeholder="Asunto"/>
        <h3> Contenido : </h3>
        <textarea id="description" name="descripcion"></textarea>
        <input id="borrador" type="submit" name="borrador" value="Borrador">
        <input id="enviar" type="submit" name="enviar" value="Enviar">
        <a id="boton_registro" href="Bandeja de Salida.html"> Cancelar </a>
    </form>
</div>
@endsection

