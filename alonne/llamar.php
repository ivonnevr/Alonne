<?php
    include('conexion.php');

    $mesa = "2";
    $asunto = "Asistencia solicitada";

    //Guardar a la DB
    $sql = "INSERT INTO asistencias (mesa, asunto) VALUES ('$mesa', '$asunto')";

    //Use exec() because no results are returned
    $conn->exec($sql);

    //Redireccionar
    header('Location: asistencia_message.php');

?>