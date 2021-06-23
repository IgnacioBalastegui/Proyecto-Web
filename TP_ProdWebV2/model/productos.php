<?php

    class ProductDAO {

        public static $FILE = "./json/products.json";

        public static function agregarProducto($pro_id, $pro_index, $pro_name, $pro_price, $pro_desc){

            $content = file_get_contents(ProductDAO::$FILE);

            $arr_prod = json_decode($content, true);

            $prod = array(
                "id"=>$pro_id,
                "index"=>$pro_index,
                "name"=>$pro_name,
                "price"=>$pro_price,
                "desc"=>$pro_desc
            );

            array_push($arr_prod,$prod);

            $jsondata = json_encode($arr_prod, JSON_PRETTY_PRINT);

            file_put_contents("model/json/products.json", $jsondata);

        }

    }



?>

<?php
	/*
	include ("./views/conexion.php");

	class ProductDAO{

		// SELECT SIN FILTRO
		public static function listar(){

			global $mysqli;
			$result = $mysqli->query("SELECT * FROM productos");
			$rows = array();
			while($row = $result->fetch_assoc()) {

				$pro_id = $row["id"];
				$pro_index = $row["index"];
				$pro_name = $row["name"];
                $pro_price = $row["price"];
                $pro_desc = $row["desc"];

				$rows[] = new Prod($pro_id,$pro_index,$pro_name,$pro_price,$pro_desc);

			}

			return $rows;
			
		}

		// INSERT
		public static function agregarProducto($pro_id,$pro_index,$pro_name,$pro_price,$pro_desc){

			global $mysqli;
			$query = $mysqli->query("INSERT INTO productos(id,'index','name',price,'desc') VALUES ('$pro_id',$pro_index,'$pro_name','$pro_price','$pro_desc')");
			if(!$query){
				die($mysqli->error);
			}
		}

		

	}

	class Product{

		public $pro_id;
		public $pro_index;
		public $pro_name;
        public $pro_price;
        public $pro_desc;

		public function __construct($pro_id,$pro_index,$pro_name,$pro_price,$pro_desc){
			$this->id = $pro_id;
			$this->index = $pro_index;
			$this->name = $pro_name;
            $this->price = $pro_price;
            $this->desc = $pro_desc;
		}

	}
*/
?>

<?php
/*
class ProductDAO {
public static $FILE_PROD = './model/json/productos.json';
public static $FILE_CATE = './model/json/categoria.json';

public static function cargarProductos(){
	
	$HOST   = "localhost";
	$USER   = "root";
	$PASS   = "";
	$DBNAME = "e_commerce";

	$mysqli = new mysqli($HOST, $USER, $PASS, $DBNAME);
	//global $mysqli;

	$stmt = $mysqli->prepare("SELECT * FROM prod");
	$stmt->execute();

	$resultado   = $stmt->get_result();
	$arr_prod = array();

	while($prod = $resultado->fetch_assoc()){
		$prodId = $prod["prodId"];
		$prodIndex = $prod["index"];
		$prodNombre = $prod["prodNombre"];
		$prodPrecio = $prod["prodPrecio"];
		$prodDesc = $prod["prodDesc"];
		$prodCategoria = $prod["categoriaId"];

		$arr_prod[] = new Prod($prodId, $prodIndex, $prodNombre, $prodPrecio, $prodDesc, $prodCategoria);
	}
	return $arr_prod;
}
//}
 //intentar completar el controller de productos
public static function cargarProductoPorId($productoId){
        
	$HOST   = "localhost";
	$USER   = "root";
	$PASS   = "";
	$DBNAME = "e_commerce";

	$mysqli = new mysqli($HOST, $USER, $PASS, $DBNAME);

	$stmt = $mysqli->prepare("SELECT * FROM prod WHERE prodId = ?");
	$stmt->bind_param("i", $productoId);
	$stmt->execute();

	$resultado   = $stmt->get_result();
	$producto    = null;
	
	while($prod = $resultado->fetch_assoc()){
		$prodId = $prod["prodId"];
		$prodIndex = $prod["index"];
		$prodNombre = $prod["prodNombre"];
		$prodPrecio = $prod["prodPrecio"];
		$prodDesc = $prod["prodDesc"];
		$prodCategoria = $prod["categoriaId"];

		$producto = new Prod($prodId, $prodIndex, $prodNombre, $prodPrecio, $prodDesc, $prodCategoria);
	}
	return $producto;
}
}
class Prod{

	public $productoId;
	public $prodId;
	public $proNombre;
	public $proDescripcion;
	public $proPrecio;
	public $categoria;

	public function __construct($id, $nombre, $desc, $precio, $categoria){
		$this->productoId     = $id;
		$this->proNombre      = $nombre;
		$this->proDescripcion = $desc;
		$this->proPrecio      = $precio;
		$this->categoriaId    = $categoria;
	}

}
*/
?>
