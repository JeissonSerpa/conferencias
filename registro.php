<?php include_once 'includes/template/header.php'; ?>
        
        <section class="seccion contenedor">
            <h2>Registro de Usuarios</h2>
            <form action="index.html" class="registro" id="registro" method="POST">

							<div id="datos-usuario" class="registro caja clearfix">
								<div class="campo">
									<label for="nombre">Nombre:</label>
									<input type="text" id="nombre" name="nombre" placeholder="Ingresa tu Nombre">
								</div>
								<div class="campo">
										<label for="apellidos">Apellidos:</label>
										<input type="text" id="apellidos" name="apellidos" placeholder="Ingresa tus Apellidos">
								</div>
								<div class="campo">
										<label for="email">Correo:</label>
										<input type="email" id="email" name="email" placeholder="Ingresa tus Apellidos">
								</div><!--final datos usuario-->
								<div id="error"></div>
							</div><!--final datos usuario-->

							<div id="paquetes" class="paquetes">
								<h3>Elige los paquetes que prefieras</h3>

								<ul class="lista-precios clearfix">
										<li>
											<div class="tabla-precio">
												<h3>Pase por dia (Viernes)</h3>
												<p class="numero">$25.000</p>
												<ul>
													<li>Bocadillos Gratis</li>
													<li>Todas las Conferencias</li>
													<li>Todos los Talleres</li>
												</ul>
												<div class="orden">
													<label for="Pase-dia">Boletos deseados:</label>
													<input type="number" min="0" id="pase-dia" size="3" placeholder="0">
												</div>
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
												<div class="orden">
														<label for="Pase-completo">Boletos deseados:</label>
														<input type="number" min="0" id="pase-completo" size="3" placeholder="0">
												</div>
											</div>
										</li>
						
										<li>
											<div class="tabla-precio">
												<h3>Pase por 2 dias (Viernes y Sabado)</h3>
												<p class="numero">$40.000</p>
												<ul>
													<li>Bocadillos Gratis</li>
													<li>Todas las Conferencias</li>
													<li>Todos los Talleres</li>
												</ul>
												<div class="orden">
														<label for="Pase-2dias">Boletos deseados:</label>
														<input type="number" min="0" id="pase-2dias" size="3" placeholder="0">
												</div>
											</div>
										</li>
									</ul>
							</div><!--Final paquetes-->

							<div id="eventos" class="eventos clearfix">
								<h3>Elige tus talleres</h3>
								<div class="caja">
									<div class="contenido-dia clearfix" id="viernes">
										<h4>Viernes</h4>

										<div>
											<p>Talleres:</p>
											<label><input type="checkbox" name="registro[]" id="taller_01" value="taller_01"><time>10:00</time> Responsive Web Design</label>
											<label><input type="checkbox" name="registro[]" id="taller_02" value="taller_02"><time>12:00</time> Flexbox</label>
											<label><input type="checkbox" name="registro[]" id="taller_03" value="taller_03"><time>14:00</time> HTML5 y CSS3</label>
											<label><input type="checkbox" name="registro[]" id="taller_04" value="taller_04"><time>17:00</time> Drupal</label>
											<label><input type="checkbox" name="registro[]" id="taller_05" value="taller_05"><time>19:00</time> WordPress</label>
										</div>

										<div>
											<p>Conferencias:</p>
											<label><input type="checkbox" name="registro[]" id="conf_01" value="conf_01"><time>10:00</time> Como ser Freelancer</label>
											<label><input type="checkbox" name="registro[]" id="conf_02" value="conf_02"><time>17:00</time> Tecnologías del Futuro</label>
											<label><input type="checkbox" name="registro[]" id="conf_03" value="conf_03"><time>19:00</time> Seguridad en la Web</label>
										</div>

										<div>
											<p>Seminarios:</p>
											<label><input type="checkbox" name="registro[]" id="sem_01" value="sem_01"><time>10:00</time> Diseño UI y UX para móviles</label>
										</div>

									</div><!--Viernes-->

									<div class="contenido-dia clearfix" id="sabado">
										<h4>Sabado:</h4>
										<div>
											<p>Talleres:</p>
											<label><input type="checkbox" name="registro[]" id="taller_06" value="taller_06"><time>10:00</time> AngularJS</label>
											<label><input type="checkbox" name="registro[]" id="taller_07" value="taller_07"><time>12:00</time> PHP y MySQL</label>
											<label><input type="checkbox" name="registro[]" id="taller_08" value="taller_08"><time>14:00</time> JavaScript Avanzado</label>
											<label><input type="checkbox" name="registro[]" id="taller_09" value="taller_09"><time>17:00</time> SEO en Google</label>
											<label><input type="checkbox" name="registro[]" id="taller_10" value="taller_10"><time>19:00</time> De Photoshop a HTML5 y CSS3</label>
											<label><input type="checkbox" name="registro[]" id="taller_11" value="taller_11"><time>21:00</time> PHP Medio y Avanzado</label>
										</div>

										<div>
											<p>Conferencias:</p>
											<label><input type="checkbox" name="registro[]" id="conf_04" value="conf_04"><time>10:00</time> Como crear una tienda online en pocos días</label>
											<label><input type="checkbox" name="registro[]" id="conf_05" value="conf_05"><time>17:00</time> Los mejores lugares para encontrar trabajo</label>
											<label><input type="checkbox" name="registro[]" id="conf_06" value="conf_06"><time>19:00</time> Pasos para crear un negocio rentable</label>
										</div>

										<div>
											<p>Seminarios:</p>
											<label><input type="checkbox" name="registro[]" id="sem_02" value="sem_02"><time>10:00</time> Aprende a Programar en una mañana</label>
											<label><input type="checkbox" name="registro[]" id="sem_03" value="sem_03"><time>17:00</time> Diseño UI y UX para móviles</label>
										</div>

									</div><!--sabado-->

									<div id="domingo" class="contenido-dia clearfix">
										<h4>Domingo</h4>
										<div>
											<p>Talleres:</p>
											<label><input type="checkbox" name="registro[]" id="taller_12" value="taller_12"><time>10:00</time> Laravel</label>
											<label><input type="checkbox" name="registro[]" id="taller_13" value="taller_13"><time>12:00</time> Crea tu propia API</label>
											<label><input type="checkbox" name="registro[]" id="taller_14" value="taller_14"><time>14:00</time> JavaScript y jQuery</label>
											<label><input type="checkbox" name="registro[]" id="taller_15" value="taller_15"><time>17:00</time> Creando Plantillas para WordPress</label>
											<label><input type="checkbox" name="registro[]" id="taller_16" value="taller_16"><time>19:00</time> Tiendas Virtuales en Magento</label>
										</div>

										<div>
											<p>Conferencias:</p>
											<label><input type="checkbox" name="registro[]" id="conf_07" value="conf_07"><time>10:00</time> Como hacer Marketing en línea</label>
											<label><input type="checkbox" name="registro[]" id="conf_08" value="conf_08"><time>17:00</time> ¿Con que lenguaje debo empezar?</label>
											<label><input type="checkbox" name="registro[]" id="conf_09" value="conf_09"><time>19:00</time> Frameworks y librerias Open Source</label>
										</div>

										<div>
											<p>Seminarios:</p>
											<label><input type="checkbox" name="registro[]" id="sem_04" value="sem_04"><time>14:00</time> Creando una App en Android en una tarde</label>
											<label><input type="checkbox" name="registro[]" id="sem_05" value="sem_05"><time>17:00</time> Creando una App en iOS en una tarde</label>
										</div>

									</div><!--Domingo-->
								</div><!--Caja-->
							</div><!--Evento-->
							
							<div id="resumen" class="resumen">
								<h3>Pago y Extras</h3>
								<div class="caja">
									<div class="contenedor clearfix">
										<div class="extras">
											<div class="orden">
												<label for="Camisa">Camisa del evento $10.000 <small>(Promocion 10% de dto.)</small></label>
												<input type="number" min="0" id="camisa_evento" size="3" placeholder="0">
											</div>

											<div class="orden">
													<label for="Etiquetas">Etiquetas del Evento $5.000 <small>(Promocion 5% de dto.)</small></label>
													<input type="number" min="0" id="etiquetas" size="3" placeholder="0">
											</div>

											<div class="orden">
													<label for="regalo">Seleccione su Regalo:</label>
													<select id="regalo" required>
														<option value="">-Selecione un Regalo--</option>
														<option value="eti">Etiquetas</option>
														<option value="pul">Pulseras</option>
														<option value="lap">Lapiz</option>
														<option value="gor">Gorras</option>
													</select>
											</div><!--Orden y regalos-->

											<input type="button" id="calcular" class="leer" value="Calcular">
										</div><!--Extras-->

										<div class="total extras">
											<p>Resumen</p>

											<div id="lista-productos"></div>

											<p>Tolta</p>

											<div id="suma-total"></div>

											<input type="submit" id="btnRegistro" class="leer" value="Pagar">
										</div><!--Total Compras-->
									</div>
								</div><!--Caja-->
							</div><!--Resumen-->
            </form>

        </section>

<?php include_once 'includes/template/footer.php'; ?>