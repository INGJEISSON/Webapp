<?php 
@header('Access-Control-Allow-Origin: *');
include('../modelo/ServicioModel.php'); //Modelo de pedidos
//include('../modelo/UserModel.php'); //Modelo de pedidos

if(isset($_POST['servicios'])){ // 
   //echo "Entró aquí";

     if(isset($_POST['save'])){ // Guardar servicio

        echo save($_POST['nombre']);
    }

    if(isset($_POST['update'])){ // Actualizar servicio

        echo update($_POST['id'], $_POST['nombre'], 1);
    }

    if(isset($_POST['save_tipo'])){ // Guardar servicio

        echo save_tipo($_POST['id'], $_POST['nombre']);
    }

    if(isset($_POST['update_tipo'])){ // Actualizar servicio

        echo update_tipo($_POST['id'], $_POST['nombre'], 1, $_POST['servicio']);
    }


    
}