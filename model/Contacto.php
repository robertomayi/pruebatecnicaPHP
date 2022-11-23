<?php 
require_once __DIR__ . "/../config/conexion.php"; 

/***************************************/
/******  GET -  SELECT    **********/
/***************************************/

function index(){
    $sql = "SELECT * FROM `contactos`"; 
    $query = $GLOBALS['conn']-> prepare($sql); 
    $query -> execute(); 
    $results = $query ->fetchAll(PDO::FETCH_ASSOC); 
    return $results; 
}

function show($id){
    $sql = "SELECT * FROM `contactos` where id = '{$id}' "; 
    $query = $GLOBALS['conn']-> prepare($sql); 
    $query -> execute(); 
    $results = $query ->fetchAll(PDO::FETCH_ASSOC); 
    return $results; 
}

/***************************************/
/******  post -  INSERT    **********/
/***************************************/
function store($nombre, $apellido, $email){
    $sql = "INSERT INTO `contactos` (`nombre`, `apellido`, `email`) VALUES ('{$nombre}','{$apellido}','{$email}')"; 
    $query = $GLOBALS['conn']-> prepare($sql); 
    $query -> execute(); 
    $results = $query ->RowCount(); 
    return $results; 
}

/***************************************/
/******  POST -  UPDATE    **********/
/***************************************/
function edit($id, $nombre, $apellido, $email){
    $sql = "UPDATE `contactos`  SET `nombre` =  '{$nombre}', `apellido` = '{$apellido}', `email` ='{$email}' WHERE id = '{$id}'"; 
    $query = $GLOBALS['conn']-> prepare($sql); 
    $query -> execute(); 
    $results = $query ->RowCount(); 
    return $results; 
}

/***************************************/
/******  POST -  DELETE    **********/
/***************************************/
function destroy($id){
    $sql = "DELETE FROM `contactos`  WHERE id = '{$id}'"; 
    $query = $GLOBALS['conn']-> prepare($sql); 
    $query -> execute(); 
    $results = $query ->RowCount(); 
    return $results; 
}

?>