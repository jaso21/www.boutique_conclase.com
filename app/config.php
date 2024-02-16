<?php
    
    define('SERVIDOR','localhost');
    define('USUARIO','root');
    define('PASSWORD','');
    define('BD','tienda');

    $servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

    try {
        $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
        //echo "La conexion a la bd fue exitosa";
    } catch (PDOException $e) {
        //throw $th;
        //print_r($e);
        echo "Error al conectar la base de datos";
    }

    $URL = "http://localhost/www.boutique_conclase.com";
?>