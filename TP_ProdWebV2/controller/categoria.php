<?php
    include('./model/categoria.php');


    class CateCON{

        public function verCateoria(){
            $categorias = CategoriaDAO::cargarCategorias();
        }
    }