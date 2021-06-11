<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form name="formularioDatos" method="post" action="ej6-2.php">
        <p> Formulario </p>
        Introduzca el nombre: <input type="text" name="nombre" value=""><br>
        Introduzca el apellido: <input type="text" name="apellido" value=""><br>
        Introduzca el DNI: <input type="text" name="dni" value=""><br>
        Introduzca la fecha de nacimiento: <input type="text" name="fnacimiento" value=""><br>
        Introduzca el email: <input type="text" name="email" value=""><br>
        <select name=provincia id="">
            <option>Seleccione su provincia</option>
            <option>Entre Ríos</option>
            <option>Buenos Aires</option>
            <option>Cordoba</option>
        </select>
        <p>¿Es donante?</p>
        <input type="radio" name="donante" value="Es donante" required="true">Si<br>
        <input type="radio" name="donante" value="No es donante" required="true">No<br>
        Acepta los terminos y condiciones <input type="checkbox" class="controls"><br>
        <input value="Enviar" type="submit" />
    </form>    
</body>
</html>