<?php
  require_once('header.php');
  

  /* require_once(el model correspondiente);*/
  $arr_contacts = json_decode(file_get_contents("./json/contacts.json"),true);

if(isset($_GET['in_submit']))
{
  $temp_nombre = $_GET['nombre'];
  $temp_apellido = $_GET['ape'];
  $temp_correo = $_GET['correo'];
  $temp_telefono = $_GET['telefono'];
  $temp_consulta = $_GET['consulta'];

  $temp_contacts[]=

  array_push($arr_contacts,array(
	
    'nombre'=> $temp_nombre,
    'apellido'=> $temp_apellido,
    'correo'=> $temp_correo,
    'telefono'=> $temp_telefono,
    'consulta'=> $temp_consulta));

    UpdateArrayFile($arr_contacts,"./json","contacts.json");
}
?>

<?php
if (isset($_FILES) && !empty($_FILES) ){

	if (  is_array($_FILES['in_archivo']['name'])  ) 
    {
        
        for ($indice = 0;$indice < count($_FILES['in_archivo']['name']);$indice++ )
        {
            $arch_tmp = $_FILES['in_archivo']['tmp_name'][$indice];
            $arch_final = 'archivos/' . $_FILES['in_archivo']['name'][$indice];
            move_uploaded_file($arch_tmp, $arch_final);
        }

     }
     else
        {
            $arch_tmp = $_FILES['in_archivo']['tmp_name'];
            $arch_final =  $_FILES['in_archivo']['name'];
            move_uploaded_file($arch_tmp, $arch_final);
         }

}

?>

<script type="text/javascript">
	function valida_envia(){

   	if (document.fvalida.nombre.value.length==0){
      		alert("Tiene que escribir su nombre")
      		document.fvalida.nombre.focus()
      		return 0;
   	}

       if (document.fvalida.ape.value.length==0){
      		alert("Tiene que escribir su apellido")
      		document.fvalida.ape.focus()
      		return 0;
   	}

   	if (document.fvalida.correo.value.length==0){
      		alert("Tiene que escribir su correo")
      		document.fvalida.correo.focus()
      		return 0;
   	}

       if (document.fvalida.telefono.value.length==0){
      		alert("Tiene que escribir su telefono")
      		document.fvalida.telefono.focus()
      		return 0;
   	}


       if (document.fvalida.consulta.value.length==0){
      		alert("Tiene que escribir su consulta")
      		document.fvalida.consulta.focus()
      		return 0;
   	}


   	alert("Muchas gracias por enviar el formulario");
   	document.fvalida.submit();
}
</script>

<div  onload="fvalida.nombre.focus()" class="contact_body comment">
        <h1  style="padding-left:2em;">Formulario de consultas</h1>

        <div class="container">
        <div class="row">

        <form name="fvalida" action="index.php?controller=contact&action=form" method="POST" >
        <table style="margin-top: 40px;">

        <tr>
           	<td>Nombre: </td>
           	<td><input type="text" name="nombre" size="30" maxlength="100"  placeholder="su nombre"></td>
        </tr>

        <tr>
           	<td>Apellido: </td>
           	<td><input type="text" name="ape" size="30" maxlength="100"  placeholder="su apellido"></td>
        </tr>

        <tr>
           	<td>Correo: </td>
           	<td><input type="text" name="correo" size="30" maxlength="100"  placeholder="sunombre@gmail.com"></td>
        </tr>

        <tr>
           	<td>Teléfono: </td>
           	<td><input type="text" name="telefono" size="30" maxlength="100" placeholder="+54 1111111111"></td>
        </tr>

        <tr>
           	<td>Consulta: </td>
           	<td><input type="text" name="consulta" size="50" maxlength="500"  placeholder="su consulta"
               style="height:100px; text-align:start;"></td>
        </tr>
        <tr>
           	<td colspan="2" align="center">
				<input type="submit" class="btn btn-primary" name="in_submit">
        	</td>
        </tr>
		</table>
		
        </form>

        <div class="col-12 col-md-6 col-lg-4" style="text-align: center;">
                       <h3>Sedes</h3>
                     <iframe src="https://www.google.com/maps/d/embed?mid=1GjZxFcb4OK5AJlqaDfDj1YW4Sug&hl=en"
                      style="height: 400px; width: 560px; " class="mapa"></iframe>

                    </div>
		</div>
        </div>
</div>


<?php
require_once('footer.php');
?>