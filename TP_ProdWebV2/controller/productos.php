<?php
//session_start();
   require_once("./model/productos.php");

    class productos {

        function detalleProd(){

            require_once("views/product_details.php");
        }

        }

?>

<?php
/*
include('./model/productos.php');
    include('./model/categoria.php');

    class ProductoCONT{

        public function verProducto(){
            $categorias = CategoriaDAO::cargarCategorias();
            $producto   = ProductoDAO::cargarProductoPorId($_GET['productoId']);
            require_once("view/producto.php");
        }
    }
        ?>
        
<?php
/*
	include("./model/productos.php");

	if($_SERVER['REQUEST_METHOD'] == "GET"){

		$usuarios = ProductDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "POST"){

		$pro_id = $_POST["id"];
		$pro_index = $_POST["index"];
		$pro_name = $_POST["name"];
        $pro_price = $_POST["price"];
        $pro_desc = $_POST["desc"];

		// Lógica de campos completos, con sentido, etc etc...

		ProductDAO::agregarProducto($pro_id,$pro_index,$pro_name,$pro_price,$pro_desc);
		
		$usuarios = UsuariosDAO::listar();

	} else if($_SERVER["REQUEST_METHOD"] == "DELETE"){

		echo "Borrar usuario";
	
	}

	require_once("./views/product_details.php");
*/
?>