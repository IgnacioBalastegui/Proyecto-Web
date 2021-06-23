<?php
function printTest()
{
  echo "<h1>Test</h1>";
}

function UpdateArrayFile($array, $folder, $file_name){
    if ( ! file_exists($folder) )
        mkdir($folder);

    $fp= fopen($folder.'/'.$file_name,'w');
    fwrite($fp, json_encode($array));
    fclose($fp);

    };

function MostrarArray($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    };

function instantiateCarousel($folder,$sub_folder)
{
  if ($sub_folder=="0") {
    echo '
    <div id="carouselExampleIndicators" class="carousel slide type_0" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src ="./public/images/'.$folder.'/slide_4.jpg" alt="First Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src ="./public//images/'.$folder.'/slide_5.jpg" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src ="./public/images/'.$folder.'/slide_6.jpg" alt="Thrid Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    ';
  }else {
    echo '
    <div id="carouselExampleIndicators" class="carousel slide type_1" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src ="./public/images/'.$folder.'/'.$sub_folder.'/1.jpg" alt="First Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src ="./public/images/'.$folder.'/'.$sub_folder.'/2.jpg" alt="Second Slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src ="./public/images/'.$folder.'/'.$sub_folder.'/3.jpg" alt="Third Slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    ';
  }
}
