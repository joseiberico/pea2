<?php
require "data/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
     crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1>Consulta de clientes</h1>
    <hr>
    <a href="index.php" class="btn btn-primary">Consultar</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Tipo Cliente</th>
                <th>Tipo Doc.</th>
                <th>N° Documento</th>
                <th>Direción</th>
            </tr>
        </thead>
        <tbody id = "tblData">
   
        </tbody>
    </table>
    </div>
    <script src = "js/listar_cliente.js"></script>
</body>

</html>