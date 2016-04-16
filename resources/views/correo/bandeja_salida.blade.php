
    <link rel="Stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="login.js"></script>

<body>

<div class = "contenedor_general">

    <div class="opciones">
        <ul>
            <li><a id="boton_especial" href="Bandeja de Salida.html"> SALIDA </a></li>
            <li><a id="boton" href="Enviados.html"> ENVIADOS </a></li>
            <li><a id= "boton" href="Correo Nuevo.html" title = "Nuevo Correo"> NUEVO </a></li>
        </ul>
    </div>

    <div class = "minicontenedor">

        <div id= "descripcion">
            <h2> BANDEJA DE SALIDA </h2>
            <h4 id="mensaje" style="display: none;">Se guardó correctamente</h4>

            <table id="tablaSalida">
                <thead>
                <th>correo</th>
                <th>asunto</th>
                <th>action</th>
                <th>action</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

</div>
<script src="vendor/jquery.js"></script>
<script>
    $(document).ready(function(){
        validarNewUser();
        cargarTablaSalida();
    });
</script>
</body>