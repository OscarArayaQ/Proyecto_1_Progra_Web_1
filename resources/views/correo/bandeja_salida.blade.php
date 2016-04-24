@extends('layouts.master')
@section('content')

    <div class="contenedor_general">
        <div class="opciones">
            <ul>

                <li><a id="boton" href="/correo/enviado"> ENVIADOS </a></li>
                <li><a id="boton" href="/correo/create" title="Nuevo Correo"> NUEVO </a></li>
                <li><a id="boton" href="/correo/borrador" title="Nuevo Correo"> BORRADOR </a></li>
            </ul>
        </div>
        <div class="minicontenedor">
            <div id="descripcion">
                <h2> BANDEJA DE SALIDA </h2>
                <h4 id="mensaje" style="display: none;">Se guardó correctamente</h4>
                <table id="tablaSalida">
                    <thead>
                    <th>asunto</th>
                    <th>contenido</th>
                    </thead>
                    <tbody>
                    @forelse($correos as $correo)
                        <tr>
                            <td>{{$correo->asunto}}</td>
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