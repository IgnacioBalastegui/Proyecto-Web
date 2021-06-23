
<?php
  require_once('header.php');
  ?>
  
<?php
  //require_once('../model/functions_library.php');


$pr_index = $_GET["home"];

$arr_prod = json_decode(file_get_contents("./json/products.json"),true);

$pr_id = $arr_prod[$pr_index]["id_product"];
$pr_cate=$arr_prod[$pr_index]["id_category"];
$pr_img_folder = "id_".$pr_id;
$pr_im= "./public/images/".$pr_cate."/".$pr_img_folder."/1.jpg";
$pr_name= $arr_prod[$pr_index]["name"];
$pr_pre= $arr_prod[$pr_index]["price"];
$pr_des= $arr_prod[$pr_index]["description"];


?>
<!-- Product card -->
<div class="product_section">
<div class="product_carousel"style="max-width: 840px;  margin-left: auto; margin-right: auto; border: 1px solid rgba(0,0,0,.125);">
<div class="row no-gutters">
  <div class="col-md-6" >
    <img class="d-block w-100" src ="./public/images/<?php echo $pr_cate ?>/<?php echo $pr_img_folder ?>/1.jpg" alt="First Slide">
  </div>
  <div class="col-md-6 comment">
    <div class="card-body">
      <h1 class="card-title"><?php echo $pr_name; ?></h1>
      <p class="card-text"><?php echo $pr_des;?></p>
      <p class="card-text">Precio:<?php echo $pr_pre;?></p>
      <a href="#" class="btn btn-primary">Agregar al Carrito</a>
    </div>
  </div>
</div>
</div>

</div>

</div>

<?php
//Footer
require_once('footer.php');
?>