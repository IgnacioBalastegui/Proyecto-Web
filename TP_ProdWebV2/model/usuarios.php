<?php
include ("./conexion.php");
    class UsuariosDAO {

        public static $FILE = "./json/users.json";

        public static function existeUsuario($usuario, $pwd){

            $content = file_get_contents(UsuariosDAO::$FILE);
    
            $arr_usuarios = json_decode($content, true);
            
            $return = false;
            foreach ($arr_usuarios as $cred){
    
                if ($cred["user"] == $usuario && $cred["pwd"] == $pwd){
                    $return = true;
                    break;
                }
    
            }
    
            return $return;
    
        }

        public static function crearUsuario($usuario, $pwd){

            $arr_usuarios = json_decode(file_get_contents(UsuariosDAO::$FILE), true);

            $user = array(
                "user"=>$usuario,
                "pwd"=>$pwd
            );

            array_push($arr_usuarios,$user);

            $jsonUsuario = json_encode($arr_usuarios);

            file_put_contents(UsuariosDAO::$FILE, $jsonUsuario);

        }


        public static function usuarioOcupado($usuario){

            $content = file_get_contents(UsuariosDAO::$FILE);
    
            $arr_usuarios = json_decode($content, true);
            
            $return = false;
            foreach ($arr_usuarios as $cred){
    
                if ($cred["user"] == $usuario){
                    $return = true;
                    break;
                }
    
            }
    
            return $return;
    
        }

    

    }
/*

	//include ("./views/conexion.php");

		public static function listar(){

			global $mysqli;
			$result = $mysqli->query("SELECT * FROM usuarios");
			$rows = array();
			while($row = $result->fetch_assoc()) {
                
                $id=$row["id"];
                $mail=$row["mail"];
				$nombre = $row["username"];
				$pwd = $row["pwd"];

				$rows[] = new Usuario($id,$mail,$nombre,$pwd);

			}

			return $rows;
			
		}

		// INSERT
		public static function crear($mail,$nombre,$pwd){

            if($_SERVER['REQUEST_METHOD'] == "GET"){

                $id = $_GET["id"];
                
                //CONSULTA/SELECT A DB
                $stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE id= ?");
                $stmt->bind_param("s", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                echo "Select ejecutado <br>";
                
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
                        echo "Mail: " . $row["mail"]. "<br>";
                        echo "Nombre: " . $row["username"]. "<br>";
                        echo "Contraseña: " . $row["pwd"]. "<br>";
                    }
                }
                
                }
            }
        }
	class Usuario{
        
        public $id;
        public $mail;
		public $nombre;
		public $pwd;

		public function __construct($mail,$nombre,$pwd){
            
            $this->id = $id;
            $this->mail = $mail;
			$this->nombre = $nombre;
			$this->pwd = $pwd;
		}

	}
*/
    
?>


<?php
/*
require_once("conexion.php");

if($_SERVER['REQUEST_METHOD'] == "GET"){

	$id = $_GET["id"];

	//CONSULTA/SELECT A DB
	$stmt = $mysqli->prepare("SELECT * FROM usuarios WHERE id= ?");
	$stmt->bind_param("s", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	echo "Select ejecutado <br>";

	if($result->num_rows > 0){
		while($row = $result->fetch_assoc()) {
            echo "Mail: " . $row["userMail"]. "<br>";
			echo "Nombre: " . $row["userNombre"]. "<br>";
			echo "Contraseña: " . $row["userPwd"]. "<br>";
		}
	}

}
    
*/
?>