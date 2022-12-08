<?php
    require("./conexion.php");
    $data = json_decode(file_get_contents('php//input'), true);
    $name = $data['Destino'];
    $origin = $data['Salida'];
    $price = $data['Precio'];
    $duration = $data['Duracion'];

    $conexion = new Conexion();
    $db = $conexion->getConexion();
    $query = "INSERT INTO internacionales (Destino, Salida, Precio, Duracion) VALUES (:name,:origin,:price,:duration)";
    $statement = $db->prepare($query);
    $statement->bindParam(":destino", $name);
    $statement->bindParam(":salida", $origin);
    $statement->bindParam(":precio", $price);
    $statement->bindParam(":duracion", $duration);
    $result = $statement->execute();

    if($result){
        return "successfully";
    }
        return "error";
?>
