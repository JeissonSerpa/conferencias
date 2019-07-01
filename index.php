<?php include_once 'includes/template/header.php'; ?>

	<section class="seccion contenedor">
		<h2>La mejor web de Conferencias</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco. laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
	</section>

	<section class="programa">
		<div class="contenedor-video">
			<video autoplay loop poster="img/bg-talleres.jpg">
				<source src="video/video.mp4">
				<source src="video/video.webm">
				<source src="video/video.ogv">
			</video>
		</div><!--contenedor Video-->

		<div class="contenido-programa">
			<div class="contenedor">
				<div class="programa-evento">
					<h2>Programa Evento</h2>

					<?php
						try{
							require_once('includes/funciones/conexion.php');
							$sql = "SELECT * FROM categoriaEvento";
							$consulta = $conn->query($sql);

						}catch(Ecxeption $e){
							echo $e->getMessage();
						} 	
						
    			?>
					<nav class="menu-programa">
						<?php 
						while($row = $consulta->fetch_assoc()){
					
							echo "<a href='#".strtolower($row['cat_evento'])."' class='nav-categoria'><i class='fas ".$row['icono']."'></i>".$row['cat_evento']."</a>";
					 	}
					 ?>
					</nav>

					<?php
						try{
							$sql = "SELECT nombre_evento, fecha_evento, hora_evento, cat_evento, id_cat_evento, icono, nombre, apellido FROM eventos 
							LEFT JOIN categoriaEvento ON id_cat_evento = id_categoria
							LEFT JOIN invitados ON id_invi = id_invitado
							where id_cat_evento = 1 and RAND() < (SELECT ((3/COUNT(*))*10) FROM eventos) ORDER BY RAND()  limit 3;";
							$consulta = $conn->query($sql);

							$sql2 = "SELECT nombre_evento, fecha_evento, hora_evento, cat_evento, id_cat_evento, icono, nombre, apellido FROM eventos 
							LEFT JOIN categoriaEvento ON id_cat_evento = id_categoria
							LEFT JOIN invitados ON id_invi = id_invitado
							where id_cat_evento = 2 and RAND() < (SELECT ((3/COUNT(*))*10) FROM eventos) ORDER BY RAND()  limit 3;";
							$consulta2 = $conn->query($sql2);

							$sql3 = "SELECT nombre_evento, fecha_evento, hora_evento, cat_evento, id_cat_evento, icono, nombre, apellido FROM eventos 
							LEFT JOIN categoriaEvento ON id_cat_evento = id_categoria
							LEFT JOIN invitados ON id_invi = id_invitado
							where id_cat_evento = 3 and RAND() < (SELECT ((3/COUNT(*))*10) FROM eventos) ORDER BY RAND()  limit 3;";
							$consulta3 = $conn->query($sql3);

						}catch(Ecxeption $e){
							echo $e->getMessage();
						} 
					?>

					<div id='talleres' class='info-curso ocultar clearfix'>
					<?php
						while($row = $consulta->fetch_assoc()){
							echo	"<div class='detalle-evento'>
												<h3>".$row['nombre_evento']."</h3>
												<p><i class='fas fa-clock'></i> ".$row['hora_evento']."</p>
												<p><i class='fas fa-calendar-alt'></i> ".$row['fecha_evento']."</p>
												<p><i class='fas fa-user'></i> ".$row['nombre']." ".$row['apellido']."</p>
											</div>";						
						}
					?>
					</div><!--seminarios-->

					<div id='conferencias' class='info-curso ocultar clearfix'>
					<?php
						while($row = $consulta2->fetch_assoc()){
							echo	"<div class='detalle-evento'>
												<h3>".$row['nombre_evento']."</h3>
												<p><i class='fas fa-clock'></i> ".$row['hora_evento']."</p>
												<p><i class='fas fa-calendar-alt'></i> ".$row['fecha_evento']."</p>
												<p><i class='fas fa-user'></i> ".$row['nombre']." ".$row['apellido']."</p>
											</div>";						
						}
					?>
					</div><!--seminarios-->

					<div id='seminarios' class='info-curso ocultar clearfix'>
					<?php
						while($row = $consulta3->fetch_assoc()){
							echo	"<div class='detalle-evento'>
												<h3>".$row['nombre_evento']."</h3>
												<p><i class='fas fa-clock'></i> ".$row['hora_evento']."</p>
												<p><i class='fas fa-calendar-alt'></i> ".$row['fecha_evento']."</p>
												<p><i class='fas fa-user'></i> ".$row['nombre']." ".$row['apellido']."</p>
											</div>";						
						}
					?>
					</div><!--seminarios-->

					
					<a href="calendario.php" class="float-right leer">Leer mas</a>
				</div><!--Programacion de eventos ID talleres-->
			</div>
		</div>
	</section><!--contenedor talleres-->

	<?php include_once 'includes/template/invitados.php'; ?>

	<div class="contador parallax">
		<div class="contenedor">
			<ul class="resumen-evento clearfix">
				<li><p class="numero"></p>Invitados</li>
				<li><p class="numero"></p>Talleres</li>
				<li><p class="numero"></p>Dias</li>
				<li><p class="numero"></p>Conferencias</li>
			</ul>
		</div>
	</div>

	<section class="precios seccion">
		<h2>Precios</h2>
		<div class="contenedor">
			<ul class="lista-precios clearfix">
				<li>
					<div class="tabla-precio">
						<h3>Pase por dia</h3>
						<p class="numero">$25.000</p>
						<ul>
							<li>Bocadillos Gratis</li>
							<li>Todas las Conferencias</li>
							<li>Todos los Talleres</li>
						</ul>
						<a class="leer hollow" href="#">Comprar</a>
					</div>
				</li>

				<li>
					<div class="tabla-precio">
						<h3>Todos los dias</h3>
						<p class="numero">$90.000</p>
						<ul>
							<li>Bocadillos Gratis</li>
							<li>Todas las Conferencias</li>
							<li>Todos los Talleres</li>
						</ul>
						<a class="leer" href="#">Comprar</a>
					</div>
				</li>

				<li>
					<div class="tabla-precio">
						<h3>Pase por 2 dias</h3>
						<p class="numero">$40.000</p>
						<ul>
							<li>Bocadillos Gratis</li>
							<li>Todas las Conferencias</li>
							<li>Todos los Talleres</li>
						</ul>
						<a class="leer hollow" href="#">Comprar</a>
					</div>
				</li>
			</ul>
		</div>
	</section><!--fin de seccion de precios-->

	<div id="mapa" class="mapa"></div>

	<section class="seccion">
		<h2>Testimonios</h2>
		<div class="contenedor-testimonios clearfix contenedor">
			<div class="testimonios">
				<blockquote class="conten-testimonio">
					<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
					</p>
					<footer class="info-testimonial clearfix">
						<img src="img/testimonial.jpg" alt="Imagen de usuario">
						<cite>Rafael Bautista <span>Deasarrollador WEB</span></cite>
					</footer>
				</blockquote>
			</div>

			<div class="testimonios">
				<blockquote class="conten-testimonio">
					<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
					</p>
					<footer class="info-testimonial clearfix">
						<img src="img/testimonial.jpg" alt="Imagen de usuario">
						<cite>Rafael Bautista <span>Deasarrollador WEB</span></cite>
					</footer>
				</blockquote>
			</div>

			<div class="testimonios">
				<blockquote class="conten-testimonio">
					<p>ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
					</p>
					<footer class="info-testimonial clearfix">
						<img src="img/testimonial.jpg" alt="Imagen de usuario">
						<cite>Rafael Bautista <span>Deasarrollador WEB</span></cite>
					</footer>
				</blockquote>
			</div>
		</div>
	</section><!--fin de seccion de testimonios-->

	<div class="newsletter parallax">
		<div class="contenedor contenido">
			<p>Registrate a el newsleter:</p>
			<h1>GDLWEBCAM</h1>
			<a href="registro.php" class="leer transparencia">Registro</a>
		</div>
	</div><!--fin de seccion de registro-->

	<section class="seccion">
		<h2>Faltan</h2>
		<div class="cuenta-regresiva contenedor">
			<ul class="clearfix">
				<li><p id="dias" class="numero"></p>Dias</li>
				<li><p id="horas" class="numero"></p>Horas</li>
				<li><p id="minutos" class="numero"></p>Minutos</li>
				<li><p id="segundos" class="numero"></p>Segundos</li>
			</ul>
		</div>
	</section>

<?php include_once 'includes/template/footer.php'; ?>