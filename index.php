<?php include_once 'includes/template/header.php'; ?>

	<section class="seccion contenedor">
		<h2>La mejor web de Conferencias</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
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
					<nav class="menu-programa">
						<a href="#talleres"><i class="fas fa-code"></i> Talleres</a>
						<a href="#conferencias"><i class="fas fa-comment"></i> Conferencias</a>
						<a href="#seminarios"><i class="fas fa-university"></i> Seminarios</a>
					</nav>

					<div id="talleres" class="info-curso ocultar clearfix">
						<div class="detalle-evento">
							<h3>HTML5, CSS3 y JavaScript</h3>
							<p><i class="fas fa-clock"></i> 17:00</p>
							<p><i class="fas fa-calendar-alt"></i> 06-10-2018</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>

						<div class="detalle-evento">
							<h3>Desarrollo Web</h3>
							<p><i class="fas fa-clock"></i> 19:30</p>
							<p><i class="fas fa-calendar-alt"></i> 07-10-2018</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>
					
						<div class="detalle-evento">
							<h3>Back-END</h3>
							<p><i class="fas fa-clock"></i> 07:30</p>
							<p><i class="fas fa-calendar-alt"></i> 20-10-2018</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>
					</div><!--Talleres-->

					<div id="conferencias" class="info-curso ocultar clearfix">
						<div class="detalle-evento">
							<h3>Como ser Freelancer</h3>
							<p><i class="fas fa-clock"></i> 10:00</p>
							<p><i class="fas fa-calendar-alt"></i> 07-11-2018</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>

						<div class="detalle-evento">
							<h3>Tecnologia del Futuro</h3>
							<p><i class="fas fa-clock"></i> 08:00</p>
							<p><i class="fas fa-calendar-alt"></i> 07-12-2018</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>
					
						<div class="detalle-evento">
							<h3>Diseño UI/UX para Moviles</h3>
							<p><i class="fas fa-clock"></i> 11:30</p>
							<p><i class="fas fa-calendar-alt"></i> 14-01-2019</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>
					</div><!--conferencias-->

					<div id="seminarios" class="info-curso ocultar clearfix">
						<div class="detalle-evento">
							<h3>Aprende a Programar en una Mañana</h3>
							<p><i class="fas fa-clock"></i> 14:00</p>
							<p><i class="fas fa-calendar-alt"></i> 12-01-2019</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>

						<div class="detalle-evento">
							<h3>Desarrollo Web</h3>
							<p><i class="fas fa-clock"></i> 19:30</p>
							<p><i class="fas fa-calendar-alt"></i> 07-10-2018</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>
					
						<div class="detalle-evento">
							<h3>Back-END</h3>
							<p><i class="fas fa-clock"></i> 07:30</p>
							<p><i class="fas fa-calendar-alt"></i> 20-10-2018</p>
							<p><i class="fas fa-user"></i> Jeisson Serpa Romero</p>
						</div>
					</div><!--seminarios-->

					<a href="#" class="float-right leer">Leer mas</a>
				</div><!--Programacion de eventos ID talleres-->
			</div>
		</div>
	</section><!--contenedor talleres-->

	<section class="contenedor seccion invitados">
		<h2>Nuestros Invitados</h2>
		<ul class="lista-invitados clearfix">
			<li>
				<div class="invitado">
					<img src="img/invitado1.jpg" alt="Lista de invitados">
					<p>Rafael Bautista</p>
				</div>
			</li>
			<li>
				<div class="invitado">
					<img src="img/invitado2.jpg" alt="Lista de invitados">
					<p>Angie Suarez</p>
				</div>
			</li>
			<li>
				<div class="invitado">
					<img src="img/invitado3.jpg" alt="Lista de invitados">
					<p>Oscar Sandoval</p>
				</div>
			</li>
			<li>
				<div class="invitado">
					<img src="img/invitado4.jpg" alt="Lista de invitados">
					<p>Susana Rivera</p>
				</div>
			</li>
			<li>
				<div class="invitado">
					<img src="img/invitado5.jpg" alt="Lista de invitados">
					<p>Harold Garcia</p>
				</div>
			</li>
			<li>
				<div class="invitado">
					<img src="img/invitado6.jpg" alt="Lista de invitados">
					<p>Susan Sanchez</p>
				</div>
			</li>
		</ul>
	</section>

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
			<a href="#" class="leer transparencia">Registro</a>
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