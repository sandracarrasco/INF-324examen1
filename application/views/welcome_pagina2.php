<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>REGISTRO ESTUDIANTIL</title>

	<style type="text/css">

	

	body {
		background-color: #2ABECB;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
		width:150%;
        height:350px;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: white;
		background-color: transparent;
		
		font-size: 25px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
		width:150%;
        height:50%;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	
	.contenedor {
       width:200%;
       height:400%;

    }

    select option { margin: 10px; background: #F6F5F5; color: #fff; text-shadow: 0 1px 0 #F6F5F5; } 
    select option[value="1"] {  background: #3CEC8B ;  } 
    select option[value="2"] { background: #F7AED8; } 
    select option[value="3"] { background: #F6B816; } 
	</style>
</head>
<body>


	<h1>REGISTRO ESTUDIANTIL</h1>

	 <img src="imagen1.png" width=100 height=80  align="right">

	<div id="body">



        <?php
          $nombre1= "juan";
          $contraseña1="abc";

          $nombre2= "rosio";
          $contraseña2="def";
          $nombre3= "julio";
          $contraseña3="ghi";


          $usuario = $_POST ['usuario'];
          $contraseña = $_POST['contraseña'];
          


         if (($usuario==$nombre1 && $contraseña==$contraseña1)||($usuario==$nombre2 && $contraseña==$contraseña2) || ($usuario==$nombre3 && $contraseña==$contraseña3) ){

            if(isset($_POST['usuario'])){
            	$_SESSION['usuario'] = $_POST['usuario'];
            	echo "Bienvenid@! :<b> ".$usuario."</b>";
 
            }
          


         }
         else{
          	echo 'Datos erroneos';
           }
         


        ?>
        


	 
        <div class="contenedor">
            <select id="select" onchange="colorChange(this)">
               <option value=""><button onclick="cambiar();">Cambiar Fondo</button></option>
               <option value="1"><button onclick="cambiar();">verde</button></option>
               <option value="2"><button onclick="cambiar();">rosado</button></option>
            <option value="3"><button onclick="cambiar();">naranja</button></option>
  
            </select>

            <script>

                function colorChange(e){
                let div = e.parentNode;
                switch(e.value){
                case '1':
                div.style.backgroundColor = "#3CEC8B";
                break;
                case '2':
                div.style.backgroundColor = "#F7AED8";
                break;
                case '3':
                div.style.backgroundColor = "#F6B816";
                break;
                default:
                div.style.backgroundColor = "";
                break;
                 }
                }
            </script>

        </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>


    </br>
    </br>
    </br>
	  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>

   </div>



</body>
</html>