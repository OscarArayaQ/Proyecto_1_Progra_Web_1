@extends('layouts.master')
@section('content')

<div class="contenedor_general">
    <div class="opciones">
        <ul>
            <li><a id="boton_especial" href="/correo/salida"> SALIDA </a></li>
            <li><a id="boton" href="/correo/enviado"> ENVIADOS </a></li>
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
        <input id="boton_registro" type="submit" name="borrador" value="Borrador">
        <input id="boton_registro" type="submit" name="enviar" value="Enviar">
        <a id="boton_registro" href="/correo/salida"> Cancelar </a>
    </form>
</div>
@endsection

