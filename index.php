<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='index.html';</script>";
}

?>
<html>
	<head>
<style>

  /* el enlace es el contenedor */
  .a-btn {
    background:#CDE;
    background:-moz-linear-gradient(#CDE, #678);
    background:-webkit-linear-gradient(#CDE, #678);
    background:-o-linear-gradient(#CDE, #678);
    background:-ms-linear-gradient(#CDE, #678);
    background:-linear-gradient(#CDE, #678);
    filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#CDE', endColorstr='#678',GradientType=0 );
    border:1px solid #89A;
    border-radius:20px;
    box-shadow:0px 1px 1px rgba(255,255,255,0.8) inset, 1px 1px 3px rgba(0,0,0,0.2), 0px 0px 0px 4px rgba(188,188,188,0.5);
    display:inline-block;
    height:40px;
    line-height: 40px;
    margin:10px 0px;
    padding: 0 70px 0 20px; /* esto dependerá del tamaño de la imagen */
    position:relative;
    -webkit-transition:all 0.3s linear;
    -moz-transition:all 0.3s linear;
    -o-transition:all 0.3s linear;
    -ms-transition:all 0.3s linear;
    transition:all 0.3s linear;
  }

  /* el texto visible */
  .a-btn-text {
    color:#456;
    display:block;
    font-size:20px;
    text-shadow:0 1px 1px #FFF;
    white-space:nowrap;
    -moz-transition:all 0.2s linear;
    -webkit-transition:all 0.2s linear;
    -o-transition:all 0.2s linear;
    -ms-transition:all 0.2s linear;
    transition:all 0.2s linear;
  }

  /* el texto oculto */
  .a-btn-slide-text {
    background:#456;
    color:#FFF;
    font-size:20px;
    font-family: Georgia;
    height:100%;
    line-height:40px;
    overflow:hidden;
    position:absolute;
    right:52px;
    text-align:left;
    text-indent:10px;
    text-shadow:1px 1px 1px #000;
    top:0px;
    white-space:nowrap;
    width:0;
    -moz-transition:width 0.3s linear;
    -webkit-transition:width 0.3s linear;
    -o-transition:width 0.3s linear;
    -ms-transition:width 0.3s linear;
    transition:width 0.3s linear;
  }

  /* el contenedor de la imagen derecha */
  .a-btn-icon-right {
    border-left:1px solid #89A;
    box-shadow:1px 0px 1px rgba(255,255,255,0.4) inset;
    height:100%;
    position:absolute;
    right:0;
    top:0;
    width:52px;
  }
  /* y la imagen */
  .a-btn-icon-right span {
    background:transparent url(arrow_right.png) no-repeat 50% 55%;
    height:38px;
    left:50%;
    margin:-20px 0px 0px -20px;
    opacity:0.7;
    position:absolute;
    top:50%;
    width:38px;
    -moz-transition:all 0.3s linear;
    -webkit-transition:all 0.3s linear;
    -o-transition:all 0.3s linear;
    -ms-transition:all 0.3s linear;
    transition:all 0.3s linear;
  }

  /* los efectos hover */
  .a-btn:hover {
    padding-right:180px;
  }
  .a-btn:hover .a-btn-text {
    color:#000;
    text-shadow:0px 1px 1px #000;
  }
  .a-btn:hover .a-btn-slide-text {
    width:100px;
  }
  .a-btn:hover .a-btn-icon-right span {
    opacity:1;
  }

</style>
	
	
</head>






	<link rel="shortcut icon" href="./images/favicon.ico">
		<title>Portal ecoplus</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
	<body background="images/login.jpg"  BGPROPERTIES="fixed">
	<div class="container">
	<div class="row">
	<div class="col-md-12">
  <center>
  
			<h2></h2>
			
			
			</ol>
			

	</div>
	</div>
	</div>
	</body>
</html>