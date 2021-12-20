<?php

class Model {

    var $ID;
    var $user;
    var $pass; 
    

    function __construct(){



    }

    function Logear(){

/*$cadenaCnx="
sqlsrv:DESKTOP-DCTSTQ7\SQLEXPRESS;Database=sistema_colas";

$cnx = new PDO($cadenaCnx);*/
$serverName = "DESKTOP-DCTSTQ7\\SQLEXPRESS";
$connectionInfo = array( "Database"=>";sistema_colas");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
$conn = sqlsrv_connect( $serverName, $connectionInfo);  
if( $conn === false )  
{  
     echo "Unable to connect.</br>";  
     die( print_r( sqlsrv_errors(), true));  
}  
try{

$consulta=$cnx->prepare("SELECT * FROM login where ID_usuario=:parametro1  AND password=:parametro2" );

$consulta->bindValue(":parametro1",$this->user);
$consulta->bindValue(":parametro2",$this->pass);

$consulta->execute();
$filaModel=$consulta->fetch();

return $filaModel;



}catch(PDOException $e){

echo "Error de conexion->".$e;

}


    }




}








?>