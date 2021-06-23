<?php
  require_once('header.php');
  

  $arr_users = json_decode(file_get_contents("./json/users.json"),true);

  if(isset($_GET['in_submit']))
  {
	$temp_nombre = $_GET['username'];
	$temp_mail = $_GET['mail'];
	$temp_pwd = $_GET['pasword'];
  
	$temp_users[]=
  
	array_push($arr_users,array(
	  
	  'nombre'=> $temp_nombre,
	  'mail'=> $temp_mail,
	  'password'=> $temp_pwd));
  
	  UpdateArrayFile($arr_users,"./json","users.json");
  }
  ?>
	<body>

		<?php

			if(isset($_SESSION["msg"])) : 

			

		?>

		<div class="alert alert-danger" role="alert">
		<?php echo $_SESSION["msg"] ?>
		</div>

		<?php

				unset($_SESSION["msg"]);
			
			endif;

		?>

		<div class="login-page">
		  <div class="form">
		    <form method="POST" action="./index.php?controller=usuarios&action=registrar" class="register-form">
			<input type="text" name="mail" placeholder="Mail"/>
		      <input type="text" name="username" placeholder="Usuario"/>
		      <input type="password" name="password" placeholder="Contraseña"/>
		      <button type="submit">Crear</button>
		      <p class="message">¿Ya esta registrado? <a href="#">Ingresar</a></p>
		    </form>
		    <form method="POST" action="./index.php?controller=usuarios&action=login" class="login-form">
			<input type="text" name="mail" placeholder="Mail"/>
		      <input type="text" name="username" placeholder="Usuario"/>
		      <input type="password" name="password" placeholder="Contraseña"/>
			  <button type="submit">login</button>
		      <p class="message">¿No esta registrado? <a href="#">Registrar</a></p>
		    </form>
		  </div>
		</div>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
				<script id="rendered-js" >  
			$('.message a').click(function () {
			$('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
			});
    	</script>
      
	</body>

	
<?php
//Footer
//require_once('footer.php');
?>
