<?php
$ROOT ='./';
include "cabecera.inc.php";


?>

   
			</br>
		    </br>
            <form action="index2.php" method= 'POST' align='center'>
            	<p> Usuario:  
                <input type="text" name="usuario"/>
                </p>
                </br>
                
                <p> Contraseña:   
            	<input type="text" name="contraseña"/>
                </p>
                </br>
                </br>
            	<input type='submit' name='Ingresar' value = 'Enviar'/> 
            </form>
			
<?php


include "pie.inc.php";
?>