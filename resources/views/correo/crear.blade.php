<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link rel="Stylesheet" href="style.css" type="text/css">
    <script type="text/javascript" src="login.js"></script>
    <title>Correo Nuevo</title>

</head>
<!--Este es el cuerpo de la pagina-->
<body>
<header id="header">

    <div id="usuario">
        <a id="volver_login" href="Bandeja de Salida.html" title = "Devolverse a bandeja de salida"> <IMG src="imagenes/devolver.png" whidth="50" height="50"> </a>
    </div>
</header>
<div class = "contenedor_general">
    <div class="opciones">
        <ul>
            <li><a id="boton_especial" href="Bandeja de Salida.html"> SALIDA </a></li>
            <li><a id="boton" href="Enviados.html"> ENVIADOS </a></li>
        </ul>
    </div>

    <div class = "minicontenedor">

        <div id= "descripcion">
            <h2> CORREO NUEVO </h2>
        </div>
    </div>
    <form id = "correo_nuevo" method="POST">
        <h3> Para : </h3>
        <input class="nuevo" id="email" type="email" name="email" required placeholder="Escriba la Direccion"/>
        <h3> Asunto : </h3>
        <input class="nuevo" id="asunto" type="asunto" placeholder="Asunto"/>
        <h3> Contenido : </h3>
        <textarea id="description"></textarea>
        <input id="boton_registro" type="button" value="Guardar" onclick="agregarEmails()">
        <a id = "boton_registro" href="Bandeja de Salida.html"> Cancelar </a>
    </form>
</div>
</div>
<script src="vendor/jquery.js"></script>
<script>
    $(document).ready(function(){
        validarNewUser();
    });
</script>
</body>
</html>