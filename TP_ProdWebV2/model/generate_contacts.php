<?php
$a_contacts=
[
  1=>array(
    "nombre"=> "ignacio",
    "apellido"=>"balastegui",
    "correo"=>"eso@gmail.com",
    "telefono"=>"123456",
    "consulta"=>"no se que consultar"
  ),

  2=>array(
    "nombre"=> "pepito",
    "apellido"=>"fulano",
    "correo"=>"ese@gmail.com",
    "telefono"=>"123465",
    "consulta"=>"no se que consultar"
  )

];

UpdateArrayFile($a_contacts,"json","contacts.json");
?>