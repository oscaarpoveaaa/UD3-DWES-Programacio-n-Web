<!-- 003validacion.php: A partir del formulario anterior, introduce validaciones en HTML 
mediante el atributo required de los campos (uso los tipos adecuados para cada 
campo), y en comprueba los tipos de los datos y que cumplen los valores esperados 
(por ejemplo, en los checkboxes que los valores recogidos forman parte de todos los 
posibles). Puedes probar a pasarle datos erróneos vía URL y comprobar su 
comportamiento. Tip: Investiga el uso de la función filter_var. -->

<?php 

if (isset($_GET["nombre"])){
    $nombre = $_GET["nombre"];
}

if (isset($_GET["apellidos"])){
    $apellidos = $_GET["apellidos"];
}

if (isset($_GET["email"])){
    $email = $_GET["email"];
    echo("Email ");
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo("Correcto <br>");
    }else{
        echo("Error <br>");
    }
}

if (isset($_GET["url"])){
    $url = $_GET["url"];
    echo("URL ");
    if(filter_var($url, FILTER_VALIDATE_URL)){
        echo("Correcto <br>");
    }else{
        echo("Error <br>");
    }
}

if (isset($_GET["sexo"])){
    $sexo = $_GET["sexo"];
    echo("Sexo ");
    if($sexo = "hombre" || $sexo = "mujer"){
        echo("Correcto <br>");
    }else{
        echo("Error <br>");
    }
}

if (isset($_GET["convivientes"])){
    $convivientes = $_GET["convivientes"];
    echo("Convivientes ");
    if(filter_var($convivientes, FILTER_VALIDATE_INT )){
        echo("Correcto <br>");
    }else{
        echo("Error <br>");
    }
}

if (isset($_GET["aficiones"])){
    $aficiones = $_GET["aficiones"];
    for ($i=0; $i < count($aficiones); $i++) { 
        if($aficiones[$i] == "futbol" || $aficiones[$i] == "padel" || $aficiones[$i] == "leer" || $aficiones[$i] == "cantar"){
            echo($aficiones[$i] . " es valido <br>");
        }else{
            echo($aficiones[$i] . " no es valido <br>");
        }
    }
}

if (isset($_GET["menu"])){
    $menu = $_GET["menu"];
    echo("Menu ");
    if($menu = "Macarrones" || $menu = "Pizza" || $menu = "Hamburguesa" || $menu = "Hot-Dog" ){
        echo("Correcto <br>");
    }else{
        echo("Error <br>");
    }
}
?>