<?php
//Header
require_once('header.php'); 
//require_once('./model/functions_library.php');
instantiateCarousel("carousel","0");
require_once('./model/generate_products.php');
require_once('./model/generate_categories.php');
require_once('./model/generate_contacts.php');
require_once('./model/generate_users.php');

$url = $_SERVER['REQUEST_URI'];
// echo $url;

if (strpos($url,"category")) { 
  $pr_categories = $_GET["category"];
}else{
  $pr_categories=0;
}

$arr_categories = json_decode(file_get_contents("./json/categories.json"),true);

?>
   

<div class="filter_container">
<div class="filter_column"><h4><a href="index.php?category=<?php echo 0?>">Limpiar filtro</h4></div>
  <?php
    foreach($arr_categories as $arr_cate){
      $cate_id=$arr_cate["id_category"];
      $cate_name = $arr_cate["name"];
      /*foreach ($categorias as $key => $value) {
        $cate_id= $value->cateId;
        $cate_name= $value->cateNombre;*/

  ?>
<!--<div class="filter_column"><h4><a href="./index.php?controller=categoria&action=verCateoria&category=<?php //echo $cate_id;?>"><?php //echo $cate_name;?></h4></div>-->
  <div class="filter_column"><h4><a href="index.php?category=<?php echo $cate_id;?>"><?php echo $cate_name;?></h4></div>


  <?php
  }
  ?>

</div>
<!--Region body-->

<div class="index_body_content" >

<?php
  $arr_prods= json_decode(file_get_contents("./json/products.json"), true);

  foreach($arr_prods as $arr_prod){

    $pr_cate=$arr_prod["id_category"];
    $pr_id=$arr_prod["id_product"];
    $pr_im= "./public/images/".$pr_cate."/"."id_".$pr_id."/1.jpg";
    $pr_fold = "./public/images/".$pr_cate."/"."id_".$pr_id."/1.jpg";;
    $pr_no= $arr_prod["name"];
    $pr_pre= $arr_prod["price"];
    $pr_des= $arr_prod["description"];
    $pr_index= $arr_prod["index"];

?>
<?php

if ($pr_categories == 0){
 ?>
    <div class="index_column">  
      <div class="index_column_content" style="margin-top:2em; margin-bottom:2em;">
        <div class="card" style="width: 18rem;">
          <a href="./index.php?controller=productos&action=detalleProd&home=<?php echo $pr_index?>"> <!--revisar el generate para arreglar, cambiar el echo por pr_id y cambiar el nombre de las im guardadas-->
            <img class="card-img-top" style="max-height:100%;max-width:100%;" 
            src="<?php echo $pr_im?>"alt="<?php echo $pr_no?>">
          </a>
          <div class="card-body"  href="./index.php?controller=productos&action=detalleProd">
            <h5 class="card-title"><?php echo $pr_no?></h5>
            <h2 class="card-title"><?php echo $pr_pre?></h2>
            <p class="card-text"<?php echo $pr_des?>>
           <!-- <a href="#" class="btn btn-primary">Agregar al Carrito</a>-->
          </div>
        </div>
      </div>
    </div>
  <?php } 
      elseif($pr_categories == $pr_cate ){?>
    <div class="index_column">  
      <div class="index_column_content" style="margin-top:2em; margin-bottom:2em;">
        <div class="card" style="width: 18rem;">
          <a href="views/product_details.php?home=<?php echo $pr_index?>">
            <img class="card-img-top" style="max-height:100%;max-width:100%;" 
            src="<?php echo $pr_im?>"alt="<?php echo $pr_no?>">
          </a>
          <div class="card-body" href="./index.php?controller=productos&action=detalleProd">
            <h5 class="card-title"><?php echo $pr_no?></h5>
            <h2 class="card-title"><?php echo $pr_pre?></h2>
            <p class="card-text"<?php echo $pr_des?>>
            <!--<a href="#" class="btn btn-primary">Agregar al Carrito</a>-->
          </div>
        </div>
      </div>
    </div>

      <?php } ?>
<?php } ?>

</div>

<?php

//Footer
require_once('footer.php');
?>