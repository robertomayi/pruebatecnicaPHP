<?php

require_once  "./controller/contactoController.php"; 


    $var = $_SERVER["REQUEST_URI"]; 
    $id = intval(preg_replace('/[^0-9]+/','',$var), 10);
    $body = json_decode(file_get_contents("php://input"), true); 


    if ($_SERVER["REQUEST_METHOD"] === "GET") { 
        switch ($var) {
          //endpoint que trae todos los contactos
        case "/api/contacto":
            getContactos(); 
        break;
        //endpoint que trae el contacto segun id 
        case "/api/contacto/".$id:
            getContactoId($id); 
        break; 
         //ennpoint para eliminar un contacto 
        case "/api/contacto/destroy/".$id:
            getDestroy($id); 
        break;
            default:
            echo json_encode("Esta Ruta no Soporta el metodo GET");
                break;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
    switch ($var) {
        //ennpoint para insertar un contacto 
        case "/api/contacto/insert":
            postStore($body); 
        break;
         //ennpoint para actualizar un contacto 
        case "/api/contacto/update":
            postEdit($body); 
        break;

        default:
        echo json_encode("Esta Ruta no Soporta el metodo POST");
        break;
    }
}