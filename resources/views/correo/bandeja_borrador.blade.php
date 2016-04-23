@extends('layouts.master')
@section('content')

    <div class="contenedor_general">
        <div class="opciones">
            <ul>
                <li><a id="boton_especial" href="Bandeja de Salida.html"> SALIDA </a></li>
                <li><a id="boton" href="Enviados.html"> ENVIADOS </a></li>
                <li><a id="boton" href="Correo Nuevo.html" title="Nuevo Correo"> NUEVO </a></li>
            </ul>
        </div>
        <div class="minicontenedor">
            <div id="descripcion">
                <h2> BANDEJA DE BORRADOR </h2>
                <h4 id="mensaje" style="display: none;">Se guardó correctamente</h4>
                <table id="tablaSalida">
                    <thead>
                    <th>asunto</th>
                    <th>contenido</th>
                    </thead>
                    <tbody>
                    @forelse($correos as $correo)
                        <tr>
                            <td>{{$correo->destinatario}}</td>
                            <td>{{$correo->asunto}}</td>
                            <td>{{$correo->contenido}}</td>
                        </tr>
                    @empty
                        <tr>
                            <td>NO HAY CORREOS EN EL BUZON DE BORRADOR</td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection