<!DOCTYPE html>
<html>
<head>
    <title>Practica Docker Compose</title>
</head>
<body>
    <h2>DOCKER COMPOSE - Romantiezer Rodriguez Perez</h2>
    <h3>2022-0721</h3> 

    <?php
    $host = getenv('MYSQL_HOST');
    $username = getenv('MYSQL_USER');
    $password = getenv('MYSQL_PASSWORD');
    $database = getenv('MYSQL_DATABASE');

    // Intenta conectarte a la base de datos MySQL/MariaDB
    $mysqli = new mysqli($host, $username, $password, $database);

    if ($mysqli->connect_error) {
        die("Error de conexión: " . $mysqli->connect_error);
    }

    echo "¡Conexión exitosa a la base de datos!";
    ?>

</body>
</html>