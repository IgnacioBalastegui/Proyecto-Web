<?php

    class ContactDAO {

        public static $FILE = "model/json/contacts.json";
    

        public static function crearConsulta($nombre, $apellido, $correo, $telefono, $consulta){

            $content = file_get_contents(ContactDAO::$FILE);

            $arr_consultas = json_decode($content, true);

            $con = array(
                "nombre"=>$nombre,
                "ape"=>$apellido,
                "correo"=>$correo,
                "telefono"=>$telefono,
                "consulta"=>$consulta
            );

            array_push($arr_consultas,$con);

            $jsondata = json_encode($arr_consultas, JSON_PRETTY_PRINT);

            file_put_contents("model/json/contacts.json", $jsondata);

        }

    }



?>

<?php
	/*
	include ("./views/conexion.php");

	class ContactDAO{

		// SELECT SIN FILTRO
		public static function listar(){

			global $mysqli;
			$result = $mysqli->query("SELECT * FROM contact");
			$rows = array();
			while($row = $result->fetch_assoc()) {
                
		$nombre = $row["nombre"];
		$ape = $row["ape"];
		$correo = $row["correo"];
        $telefono = $row["telefono"];
        $consulta = $row["consulta"];

				$rows[] = new Contact($nombre,$ape,$correo,$telefono,$consulta);

			}

			return $rows;
			
		}

		// INSERT
		public static function crear($nombre,$ape,$correo,$telefono,$consulta){

			global $mysqli;
			$query = $mysqli->query("INSERT INTO contact(nombre,edad,correo,telefono,consulta) VALUES ('$nombre',$ape,'$correo','$telefono','$consulta')");
			if(!$query){
				die($mysqli->error);
			}
		}

		

	}

	class Contact{

		public $nombre;
		public $ape;
		public $correo;
        public $telefono;
        public $consulta;

		public function __construct($nombre,$ape,$correo,$telefono,$consulta){
			$this->nombre = $nombre;
			$this->ape = $ape;
			$this->correo = $correo;
            $this->telefonno = $telefono;
            $this->consulta = $consulta;
		}

	}
*/
?>