@extends('layouts.master')
@section('content')

    <div class="contenedor_general">
        <div class="opciones">
            <ul>
                <li><a id="boton_especial" href="/correo/salida"> SALIDA </a></li>
                <li><a id="boton" href="/correo/create" title="Nuevo Correo"> NUEVO </a></li>
            </ul>
        </div>
        <div class="minicontenedor">
            <div id="descripcion">
                <h2> BANDEJA DE ENVIADOS </h2>
                <h4 id="mensaje" style="display: none;">Se guardó correctamente</h4>
                <table id="tablaSalida">
                    <thead>
                    <th>destinatario</th>
                    <th>asunto</th>
                    <th>contenido</th>
                    </thead>
                    <tbody>
                    @forelse($correos as $correo)
                        <tr>
                            <td>{{$correo->asunto}}</td>
                            <td>{{$correo->contenido}}</td>
                            <td>{{$correo->contenido}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>NO HAY CORREOS EN EL BUZON DE SALIDA</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection