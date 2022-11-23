<?php 
    header('Access-Control-Allow-Origin: *');
    header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
    header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
    header("Allow: GET, POST, OPTIONS, PUT, DELETE");
    header("Content-Type: text/html; charset=UTF-8");
    header("Content-Type:  application/json");

    require_once __DIR__ . "/../config/conexion.php"; 
    require_once __DIR__ . "/../model/Contacto.php"; 

    /***************************************/
    /******  GET -  SELECT    **********/
    /***************************************/
    function getContactos(){
            $datos =  index(); 
            echo json_encode(
                array(
                    "Status" => 200,
                    "Contacto" => $datos
                )
            );
        }
    function getContactoId($id){
            $datos =  show($id); 
            echo json_encode(
            array(
                "Status" => 200,
                "Contacto" => $datos
            )
        );
    }

    /***************************************/
    /******  POST -  INSERT    **********/
    /***************************************/

    function postStore($body){

     
        $datos = store($body['nombre'],$body['apellido'],$body['email']); 
                if ($datos === 0) {
                    echo json_encode(
                        array(
                            "Status" => 204,
                            "Contacto" => "No encontrado"
                        )
                    );
                }else{
                    echo json_encode(
                        array(
                            "Status" => 200,
                            "Contacto" => "Contacto Insertado"
                        )
                    );
                }
            
    }

    /***************************************/
    /******  POST -  UPDATE    **********/
    /***************************************/

    function postEdit($body){
        $validar = validate($body);
            if ($validar == []) {
                $datos = edit($body['id'],$body['nombre'],$body['apellido'],$body['email']); 
                if ($datos === 0) {
                    echo json_encode(
                        array(
                            "Status" => 204,
                            "Contacto" => "No logrado"
                        )
                    ); 
                }else{
                    echo json_encode(
                        array(
                            "Status" => 200,
                            "Contacto" => "Contacto Actualizado"
                        )
                    );
                }
            }else {
                echo json_encode($validar);
            }
        }

    /***************************************/
    /******  GET -  DELETE    **********/
    /***************************************/
    function getDestroy($id){
        $datos = destroy($id); 
        if ($datos === 0) {
            echo json_encode('No paso nada'); 
        }else{
            echo json_encode('Eliminado');
        }
    }

    /***************************************/
    /******  validations    **********/
    /***************************************/
    function validate($body){
        $validados = []; 
        $index = 0; 
        foreach ($body as $key => $value) {
          //  echo $value;
            if (empty($body[$key]) === true) {
                $validados[$index] = "Campo ".$key." vacio";
            }
            $index++;
        }
        return $validados;
    }

?>