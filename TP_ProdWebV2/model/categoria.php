<?php

class CategoriaDAO{

        //public static $FILE_CAT = './json/categoria.json';

        public static function cargarCategorias(){
            $HOST = "localhost";
            $USER = "root";
            $PASS = "";
            $DBNAME = "e_commerce";

            $mysqli = new mysqli($HOST, $USER, $PASS, $DBNAME);
            //global $mysqli;

            $stmt = $mysqli->prepare("SELECT * FROM categoria");
            $stmt->execute();

            $resultado   = $stmt->get_result();
            $categorias = array();

            while($categoria = $resultado->fetch_assoc()){
                $categoriaId = $categoria['cateId'];
                $categoriaNombre = $categoria['cateNombre'];

                $categorias[] = new Categoria($cateId, $cateNombre);
            }
            return $categorias;
        }
    }

    class Categoria{

        public $cateId;
        public $cateNombre;


        public function __construct($id, $nombre){
            $this->cateId = $id;
            $this->cateNombre = $nombre;
        }

    }
?>