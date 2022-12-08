<?php
    class Conexion{
        public static function getConexion(){
            $server = "localhost";
            $db = "travelingwell";
            $user = "root";
            $password = "5881011f";

            try{
                $conn = new PDO("mysql:host=$server; dbname=$db", $user, $password);
            }
            catch(PDOException $e){
                echo "Error", $e->getMessage();
            }
            return $conn;
        }
    }
?>