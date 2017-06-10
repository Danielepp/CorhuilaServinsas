<head>

<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:1100px;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#ECECEC;
				color:#000000;
				text-decoration:none;
				padding:5px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#14AE3A;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:180px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}

			#nomuser
			{
				float:right;
			}
			
		</style>

		</head>




<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="../index.php"><img src="../images/ecoplus.png"width="270" height="60"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <br><br>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php if(!isset($_SESSION["user_id"])):?>

      	 <div id="header">
    	 <ul class="nav">
      <li><a href="./index.php">Inicio</a></li>
      <li><a href="./Login.html">Iniciar sesion</a></li>
    <?php else:?>

    	 <div id="header">
    	 <ul class="nav">
    	 	


  			
 
		   	
		 
 				

 			<?php if($_SESSION["cargo"]==4 | $_SESSION["cargo"]==6| $_SESSION["cargo"]==5){
         		echo "<li><a href='#'>Barrido y limpieza »</a>
       			<ul>
    			<li><a href='../home/home5.php'>Reportar Barrido y limpieza</a></li>";
	 			if($_SESSION["cargo"]==6| $_SESSION["cargo"]==5){
    				echo "<li><a href='../home/home6.php'>Listar Barrido y Limpieza</a></li></ul></li>";
	 			}
	 			else{
	 				echo "</ul></li>";
	 			}
	 		}
  				?>
 
 			<?php if($_SESSION["cargo"]==4 | $_SESSION["cargo"]==6 | $_SESSION["cargo"]==5){
          		echo "<li><a href='#'>Recoleccion y transporte »</a>
     			<ul>
    			<li><a href='../home/home7.php'>Reportar Recoleccion y Transporte</a></li>";
				if($_SESSION["cargo"]==6 | $_SESSION["cargo"]==5){
					echo "<li><a href='../home/home8.php'>Listar Recoleccion y Transporte</a></li></ul></li>";
				}
				else
					{
					echo "</ul></li>";
				}
			}
  				?>
  
 

 			<?php if($_SESSION["cargo"]==6 | $_SESSION["cargo"]==4 | $_SESSION["cargo"]==5){
         		echo "<li><a href='#'>Disposicion Final »</a>
      			<ul>
    			<li><a href='../home/home9.php'>Reportar Disposicion Final</a></li>";
	 		if($_SESSION["cargo"]==6 | $_SESSION["cargo"]==5){
    				echo "<li><a href='../home/home10.php'>Listar Disposicion Final</a></li></ul></li>";
	 			}
	 			else {
	 				echo "</ul></li>";
	 			}
	 		}
  				?>
 
 

 		
 


 		
 


 	<?php if($_SESSION["cargo"]==6)
	 echo "<li><a href='../home/home2.php'>Usuarios</a></li>";?>

	 <li id="nomuser"><strong><a href="#"><?php echo $_SESSION["nombre"];?></strong></a>
	 <ul> <li><a href="./php/logout.php">Cerrar sesion</a></li></ul>
</ul>
    <?php endif;?>
    

  </div><!-- /.navbar-collapse -->
</div>
</nav>