<!-- 002formulario.html/.php: Crea un formulario que solicite:
Nombre y apellidos. Email. URL página personal. Sexo (radio). Número de convivientes 
en el domicilio. Aficiones (checkboxes) – poner mínimo 4 valores.
Menú favorito (lista selección múltiple) – poner mínimo 4 valores.
Muestra los valores cargados en una tabla-resumen. -->

<?php 
$nombre = $_POST["nombre"];
$apellido = $_POST["apellidos"];
$email = $_POST["email"];
$url = $_POST["url"];
$sexo = $_POST["sexo"];
$convivientes = $_POST["convivientes"];
$aficiones = $_POST["aficiones"];
$menu = $_POST["menu"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>
<div class="table-responsive">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Url</th>
                <th scope="col">Sexo</th>
                <th scope="col">Convivientes</th>
                <th scope="col">Menu</th>
                <th scope="col" colspan="4">Aficiones</th>
            </tr>
        </thead>
        <tbody>
            <tr class="">
                <?php 
                echo("<td>". $nombre . "</td>");
                echo("<td>". $apellido . "</td>");
                echo("<td>". $email . "</td>");
                echo("<td>". $url . "</td>");
                echo("<td>". $sexo . "</td>");
                echo("<td>". $convivientes . "</td>");
                echo("<td>". $menu . "</td>");
                for ($i=0; $i < count($aficiones) ; $i++) { 
                    echo("<td>". $aficiones[$i] . "</td>");    
                    };
                ?>
            </tr>
        </tbody>
    </table>
</div>

</body>
</html>