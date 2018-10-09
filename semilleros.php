<!DOCTYPE html>
<html lang="es">
	<head>
		<?php /*ENLACES DE LIBRERIAS */ include_once('secciones/links-local.php');  ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>SEMILLEROS - AUTÓNOMA DE NARIÑO</title>
		
	</head>
	<body>
		<?php
				include_once('secciones/menu1.php');
				include_once('secciones/logo-central.php');
				include_once('secciones/zoom.php');
				include_once('secciones/redes-sociales-aunar.php');
				include_once('secciones/modal-traductor.php');
				include_once('modal/modal-contactenos.php');
		?>
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 p-0">
					<img class="mx-auto img-fluid" width="100%" src="img/investigacion/semilleros.jpg" alt="SEMILLEROS - Autónoma de Nariño"/>
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_investigacion.php');?>
		
		<!-- informacion de primeros auxilios -->
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					
					<!-- enlaces a pestaña -->
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">¿Quénes somos?</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Objetivo General</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Formalización de semilleros</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Formación investiga en articulación con RedCOLSI</a>
						
					</div>
				</div>
				<!-- pestañas -->
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						
						<!-- Pestaña 1-->
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Descripción de la Oficina OTRI</strong>
								<p>La Oficina de Transferencia de Resultados de Investigación (<strong> OTRI </strong>), está adscrita a la vicerrectoría de I+D+I y Posgrados de la Corporación Universitaria Autónoma de Nariño, tiene como objetivo principal transferir a la sociedad y al sector productivo, los resultados de investigación generados por los grupos y semilleros de investigación de “AUNAR, incorporando el conocimiento y capacidades de la Institución a las necesidades del sector empresarial.
								</p>
								
							</div>
						</div>
						
						<!-- Pestaña 2-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Misión</strong>
								<p>La misión de la <strong> OTRI </strong> es proporcionar a los estudiantes, investigadores y funcionarios administrativos de la Corporación Universitaria Autónoma de Nariño, la información, el asesoramiento y el acompañamiento en la gestión de la investigación, la propiedad intelectual y la transferencia de conocimiento, con el fin de estimular la investigación aplicada y el contacto permanente con las empresas de la región.</p>
							</div>
						</div>
						
						<!-- Pestaña 3-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Visión</strong>
								<p>Ser reconocida al 2022, como una oficina de referencia en la transferencia de resultados de investigación hacia el sector productivo del sur occidente colombiano.
								</p>
							</div>
						</div>
						
						<!-- Pestaña 4-->
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<strong>Objetivos</strong>
								<br>- Identificar Resultados de Investigación de la Institución con potencial de ser transferidos.
								<br>- Promocionar y difundir la oferta tecnológica resultado de la investigación de “AUNAR”.
								<br>- Gestionar la Propiedad Intelectual.
								<br>- Realizar actividades de Vigilancia Tecnológica.
								<br>- Apoyar el emprendimiento de Base Tecnológica.
								<br>- Apoyar la creación de Spin Off.
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
		

		
		<?php include_once('secciones/footer-principal.php');?>
		
		
	</body>
</html>