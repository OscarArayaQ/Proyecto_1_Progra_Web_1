<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="Stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="login.js"></script>
    <title>Bandeja de Salida</title>

</head>

<body>
<header id="header">

    <div id="usuario">
        <a id="New_usuario" href="registro.html" style="margin: 9%; color: white">REGISTRO</a>
        <a id="volver_login" href="Login.html" title = "Devolverse a iniciar sesion"> <IMG src="imagenes/devolver.png" whidth="50" height="50"> </a>
        <a id="Hi_user"></a>

    </div>
</header>
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
</html>