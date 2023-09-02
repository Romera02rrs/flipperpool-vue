<?php

/**
 * 1. Validar si viene por post o por get (headero o die)
 * 2. Crear un array para guardar los valores que vengan del formulario (Aux)
 * 3. Guardar en $data solo valores válidos y limpios
 */

require_once "helpers.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST"){
    header("Location: /#/");
    exit();
}

/*foreach ($_POST as $key => $value) {
    $_POST[$key] = $value ?? 'No establecido';
}*/

$errores = [];
$data = [];

$aux["name"] = $_POST["name"] ?: "";
$aux["email"] = $_POST["email"] ?: "";
$aux["tel"] = $_POST["tel"] ?: "";
$aux["address"] = $_POST["address"] ?? Array("Dirección no establecida");
$aux["city"] = $_POST["city"] ?? Array("Población no establecida");
$aux["message"] = $_POST["message"] ?: "";

try {
    validate_string($aux["name"]);
    $data["name"] = clean($aux["name"]);
}catch (ValidationException $e){
    $errores[] = "Nombre ({$e->getMessage()})";
}

try {
    validate_email($aux["email"]);
    $data["email"] = clean($aux["email"]);
}catch (ValidationException $e){
    $errores[] = "Correo ({$e->getMessage()})";
}

try {
    validate_telephone($aux["tel"]);
    $data["tel"] = clean($aux["tel"]);
}catch (ValidationException $e){
    $errores[] = "Teléfono ({$e->getMessage()})";
}

/*try {
    validate_empty($aux["address"]);
    $data["address"] = clean($aux["address"][0]);
}catch (ValidationException $e){
    $errores[] = "Dirección ({$e->getMessage()})";
}*/

try {
    validate_string_contains_in_array($aux["address"],["A Coruña", "Álava", "Albacete", "Alicante", "Almería", "Asturias", "Ávila", "Badajoz", "Baleares", "Barcelona", "Burgos", "Cáceres", "Cádiz", "Cantabria", "Castellón", "Ciudad Real", "Córdoba", "Cuenca", "Girona", "Granada", "Guadalajara", "Gipuzkoa", "Huelva", "Huesca", "Jaén", "La Rioja", "Las Palmas", "León", "Lérida", "Lugo", "Madrid", "Málaga", "Murcia", "Navarra", "Ourense", "Palencia", "Pontevedra", "Salamanca", "Segovia", "Sevilla", "Soria", "Tarragona", "Santa Cruz de Tenerife", "Teruel", "Toledo", "Valencia", "Valladolid", "Vizcaya", "Zamora", "Zaragoza"]);
    $data["address"] = $aux["address"];
}catch (ValidationException $e){
    $errores[] = "Dirección ({$e->getMessage()})";
}

try {
    validate_string($aux["city"]);
    $data["city"] = clean($aux["city"]);
}catch (ValidationException $e){
    $errores[] = "Mensaje ({$e->getMessage()})";
}

try {
    validate_string($aux["message"]);
    $data["message"] = clean($aux["message"]);
}catch (ValidationException $e){
    $errores[] = "Mensaje ({$e->getMessage()})";
}

if ($errores){
    echo "<h1>Errores</h1>";

    foreach ($errores as $error) {
        echo "<br>$error";
    }
}else{

    /*$cuerpoEmail = "Nombre -> " . $data["name"];
    $cuerpoEmail .= "Correo -> " . $data["email"];
    $cuerpoEmail .= "Teléfono -> " . $data["tel"];
    $cuerpoEmail .= "Dirección -> " . $data["address"];
    $cuerpoEmail .= "Mensaje -> " . $data["message"];

    mail("info@flipperpool.com","Formulario web",$cuerpoEmail);*/


    $destinatario = "info@flipperpool.com";
    $asunto = "CORREO FORMULARIO WEB";
    $cuerpo = <<<EOT
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <title>Tabla</title>
</head>
<body class="bg-warning">
<div class="text-center m-4">
    <h1>Información del cliente</h1>
    <table class="table table-dark table-striped">
        <tr>
            <th>Nombre</th>
            <td>{$data["name"]}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{$data["email"]}</td>
        </tr>
        <tr>
            <th>Teléfono</th>
            <td>{$data["tel"]}</td>
        </tr>
        <tr>
            <th>Dirección</th>
            <td>{$data["address"]}</td>
        </tr>
        <tr>
            <th>Población</th>
            <td>{$data["city"]}</td>
        </tr>
        <tr>
            <th>Mensaje</th>
            <td>{$data["message"]}</td>
        </tr>
    </table>
</div>
</body>
</html>
EOT;


//para el envío en formato HTML
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
    $headers .= "From: {$data["name"]} <{$data["email"]}>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
    $headers .= "Reply-To: {$data["email"]}\r\n";

//direcciones que recibirán copia oculta
    $headers .= "Bcc: {$data["email"]}\r\n";

    mail($destinatario, $asunto, $cuerpo, $headers);


    header("Location: /#/");
    exit();

}
