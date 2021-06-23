<?php

session_start();
    //require_once("./model/usuarios.php");
    include("./model/usuarios.php");

    class usuarios {

        function login(){

            if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["mail"])){

                if(!empty($_POST["username"]) && !empty($_POST["pasword"]) && !empty($_POST["mail"])){

                    if(UsuariosDAO::existeUsuario($_POST["username"], $_POST["password"], $_POST["mail"])){

                        $_SESSION["username"] = $_POST["username"];
                        header('Location: ./index.php');

                    } else {

                        $_SESSION["msg"] = "El usuario no existe";
                        require_once("./views/login.php");

                    }
                
                } else {
//echo "a";
                    $_SESSION["msg"] = "Campos incompletos";
                    require_once("./views/login.php");
    
                }
            
            } else {

                $_SESSION["msg"] = "Campos incompletos";
                require_once("./views/login.php");

            }

        }

        function registrar(){

            if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["mail"])){

                if(!empty($_POST["username"]) && !empty($_POST["pasword"]) && !empty($_POST["mail"])){

                    if(!UsuariosDAO::usuarioOcupado($_POST["username"])){

                        UsuariosDAO::crearUsuario($_POST["username"],$_POST["password"],$_POST["mail"]);
                        $_SESSION["username"] = $_POST["username"];
                        header('Location: ./index.php');
    
                    } else {
    
                        $_SESSION["msg"] = "El usuario ya existe";
                        require_once("./views/login.php");
    
                    }

                } else {
//echo "c";
                    $_SESSION["msg"] = "Campos incompletos";
                    require_once("./views/login.php");

                }

            } else {

                $_SESSION["msg"] = "Campos incompletos";
                require_once("views/login.php");

            }

        }

    }

?>


<?php
/*
	//include("./model/usuarios.php");

	if($_SERVER['REQUEST_METHOD'] == "GET"){

		$usuarios = UsuariosDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "POST"){

        $mail = $_POST["mail"];
		$nombre = $_POST["username"];
		$pwd = $_POST["password"];




		// Lógica de campos completos, con sentido, etc etc...

		UsuariosDAO::crear($mail,$nombre,$pwd);
		
		$usuarios = UsuariosDAO::listar();
    
	 if($_SERVER["REQUEST_METHOD"] == "DELETE"){

		echo "Borrar usuario";
	
	}
}
	require_once("./views/login.php");
*/
?>
