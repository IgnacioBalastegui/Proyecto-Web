<?php

require_once("model/contact.php");

class contact {

function form(){

    if(isset($_POST["nombre"])  && isset($_POST["ape"]) && isset($_POST["correo"])
     && isset($_POST["telefono"]) && isset($_POST["consulta"])){

        if(!empty($_POST["nombre"]) && !empty($_POST["ape"]) && !empty($_POST["correo"])
         && !empty($_POST["telefono"]) && !empty($_POST["consulta"])){

            if(ContactDAO::crearConsulta($_POST["nombre"], $_POST["ape"], 
            $_POST["correo"], $_POST["telefono"], $_POST["consulta"])){

                $_SESSION["msg"] = "consulta enviada";
                require_once("views/contact.php");

            } else {

                $_SESSION["msg"] = "error";
                require_once("views/contact.php");

            }
        
        } else {

            $_SESSION["msg"] = "Campos incompletos";
            require_once("views/contact.php");

        }
    
    } else {

        $_SESSION["msg"] = "Campos incompletos";
        require_once("views/contact.php");

    }

}
}
?>

<?php
/*
	include("./model/contact.php");

	if($_SERVER['REQUEST_METHOD'] == "GET"){

		$usuarios = ContactDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "POST"){

		$nombre = $_POST["nombre"];
		$ape = $_POST["ape"];
		$correo = $_POST["correo"];
        $telefono = $_POST["telefono"];
        $consulta = $_POST["consulta"];

		// Lógica de campos completos, con sentido, etc etc...

		UsuariosDAO::crearConsulta($nombre,$ape,$correo,$telefono,$consulta);
		
		$usuarios = UsuariosDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "DELETE"){

		echo "Borrar usuario";
	
	}

	require_once("./views/contact.php");
*/
?>