<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
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
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color:white;
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
		margin: auto;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 0 auto;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
        width:50%;
        height: 100%;
        box-sizing: 100px;




	}
	</style>
</head>
<body>
    
      
    

       <img src="<?php $this->load->helper('url'); echo base_url(); ?> images/app.jpg" width=100 height=80  align="right"/>
       
      
    
    
	

    <?php

       $this->load->helper('url');
       echo "</br>";
       echo base_url("Welcome/index2");
        echo "</br>";
       echo site_url("Welcome/index2");

    ?>

	<h1>REGISTRO ESTUDIANTIL</h1>

 </br>
 </br>	
 </br>
 </br>	
 </br>
 </br>	
 <div id="container">
	<div id="body">
		<form action="<?php echo site_url("Welcome/index2");?>" method= 'POST' align='center'>
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
		

		
	</div>
 </div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>


</body>
</html>