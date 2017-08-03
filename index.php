<!DOCTYPE html>
<html lang="es">
<head>
	<title>Pizza Japs-Las mejores a bajo precio</title>
	<meta charset="utf-8" />
	<meta name="description" content="Bienvenidos a tu mejor lugar donde encontraras las mejores pizzas a bajo precio" />	
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css"/>
	<link rel="stylesheet"  href="css/style.css" />
	<link rel="shortcut icon" type="imagenes/x-icon" href="favicon.ico"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script>
	$(window).load(function(){
       $(".flexslider").flexslider();     
	});

</script>
	
</head>
<body>
<header>
	<h1>
		<a href="index.php">
			<img src="imagenes/logo.png" class="fade" alt="Las mejores pizzas a precios mas bajos">
		</a>
	</h1>
	<!--MENU-->
	<nav>
		<ul>
	     <li><a href="index.php">Home</a></li>
		<!--<li><a href="acerca.php">Acerca</a></li>
		<li><a href="productos.php">Productos</a></li>
		<li><a href="sucursales.php">Sucursales</a></li>
		<li><a href="contacto.php">Contactos</a></li>
		<li><a href="Inicia_Sesion.php">Iniciar Sesion</a></li> -->
		</ul>
	</nav>
	<!-- fin MENU -->
</header>
<section id="contenido">
	<section id="principal">

	 <article id="slider">
	 	<div class="flexslider" >
	 	<ul class="slides">
	 		<li>
	 			<a href="http://www.pizzajaps.com">
	 				<img src="imagenes/slide-0.png">
	 			</a>
	 			<p class="flex-caption">LAS MEJORES PIZZAS DE IGUALA</p> 
            </li>

               <li>
               	   <img src="imagenes/slide-1.png">
               	   <p class="flex-caption">PIZAS CON LOS MEJORES INGREDIENTES DE LA MEJOR CLAIDAD</p>
               </li>
               

                 <li>
               	   <img src="imagenes/slide-2.png">
               	   <p class="flex-caption">LAS MAS RICAS PIZZAS</p>
               </li>
              

	 	</ul>
	 		 
	 	</div>
	 </article> 
	</section>

	<aside>
		<article id="productos">
		   <figure id="img-producto">
		    <img src="imagenes/oferta2.png" alt="Rica pizza">
			<figcaption>Pollo en salsa de chipotle</figcaption>
			</figure>
			<figure id="img-producto">
		    <img src="imagenes/oferta1.png" alt="Rica pizza">
			<figcaption>Pizza de 3 quesos lo más rico</figcaption>
			</figure>
		</article>
	</aside>


	<section id="productos-destacados">
	      <article id="producto1">
	      <img src="imagenes/grandcheese.jpg" class="fade">
	      <p class="justificado">
	           Enamorate de nuestras unicas pizzas de especialidad. La combinacion perfecta de los ingredientes que tanto te gustan
	      	</p>
	      	<div id="leermas">
	      		<a href="productos.php" class="enviar">Leer mas </a>
	      	</div>
	      </article>
		
		<article id="producto2">
	      <img src="imagenes/hawaiana.jpg" class="fade">
	      <p class="justificado">
	           Enamorate de nuestras unicas pizzas de especialidad. La combinacion perfecta de los ingredientes que tanto te gustan
	      	</p>
	      	<div id="leermas">
	      		<a href="productos.php" class="enviar">Leer mas </a>
	      	</div>
	      </article>

	      <article id="producto3">
	      <img src="imagenes/fullextras.jpg" class="fade">
	      <p class="justificado">
	           Enamorate de nuestras unicas pizzas de especialidad. La combinacion perfecta de los ingredientes que tanto te gustan
	      	</p>
	      	<div id="leermas">
	      		<a href="productos.php" class="enviar">Leer mas </a>
	      	</div>
	      </article>
	</section>

</section><!--fin contenido-->
<footer>
	(C) Copyright alls Reservet WebMaster Kimberly Edith Calderon Ocampo 2016
</footer>

</body>
</html>