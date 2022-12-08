<?php
    require("./conexion.php");
        $list = [];
        $conexion = new Conexion();
        $db = $conexion->GetConexion();
        $query = "SELECT * FROM internacionales";
        $statement = $db->prepare($query);
        $statement->execute();
        
        while($row = $statement->fetch()){
            $list[] = $row;
        }
    $cad = json_encode($list);
    echo $cad;
?>