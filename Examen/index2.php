<?php
session_start();
?>

<div class="contenedors">



 <?php
 $ROOT ='./';
 include "cabecera.inc.php";
 include "conexion.inc.php";



 $usuario = $_POST ['usuario'];
 $contraseña = $_POST['contraseña'];


 $consulta = mysqli_query($conn, "SELECT u.ci ,u.clave, i.nombre  FROM usuario u, identificador i WHERE u.ci=i.ci and u.ci = '$usuario' and u.clave='$contraseña'");


 $res = mysqli_fetch_assoc($consulta);
 if(!empty($res)){

    if ('usuario' == '9045345'){

        $im = imagecreatefromjpeg("9045345.jpg");

        header('Content-Type: image/jpg');

        imagejpeg($im);
        echo imagejpeg($im);
        imagedestroy($im);
        
    }
    
    if(isset($_POST['usuario'])){
        $_SESSION['usuario'] = $_POST['usuario'];
        echo "Bienvenid@! :<b> ".$res['nombre']."</b>";
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


    


</div>


<?php


include "pie.inc.php";
?>