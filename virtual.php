<!DOCTYPE html>
<html lang="es">
	<head>
		<?php /*ENLACES DE LIBRERIAS */ include_once('secciones/links-local.php');  ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>PRIMEROS AUXILIOS - BIENESTAR UNIVERSITARIO - AUTÓNOMA DE NARIÑO</title>
		
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
				<div class="col-12">
					<img class="mx-auto img-fluid" width="100%" src="img/virtual/aunar-virtual.png"/>
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>

		<?php include_once('secciones/menu_aunar_virtual.php');?>
		
		<!-- ----------------SECCIÓN NOTICIAS------------------------- -->
		<?php include_once('noticias/noticia-1.php');?>
		<!-- ----------------FIN SECCIÓN NOTICIAS--------------------- -->
		
		<!-- ----------------SECCIÓN NOTICIAS------------------------- -->
		<?php include_once('slider/noticias-autonoma-de-narino.php');?>
		
		<!-- informacion de primeros auxilios -->
		<div class="container-fluid">
			<div class="row m-2 m-md-5">
				<div class="col-12 col-md-3">
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">¿Quiènes Somos?</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Preguntas Frecuentes</a>
						<a class="nav-link fuente-institucional texto-azul-os sin-texto-subrayado hvr-underline-from-center f-negrita fondo-gris-os" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Módulo Introductorio</a>
						
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="tab-content pt-sans texto-azul-os" id="v-pills-tabContent">
						<div class="tab-pane fade p-3 fondo-gris-os show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>Se entiende por primeros auxilios, la atención inmediata y temporal que se brinda a víctimas de accidentes o de afecciones de salud que se presentan repentinamente y que ponen en riesgo el bienestar de la persona. Este servicio se presta sin costo, a cualquier persona que se encuentre en el campus universitario y que requiera de dicha atención.</p>
								<p>Cuando se requiere este servicio, por favor acérquese a la Oficina de Primeros Auxilios ubicada en el primer piso de Institución.</p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="img/bienestar/aunar_primeros_auxilios.jpg"></div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>La hipertensión arterial es una patología crónica que consiste en el aumento de la presión arterial. Una de las características de esta enfermedad es que no presenta síntomas claros y no se manifiestan durante mucho tiempo.</p>
								<p>Para una persona hipertensa, es indispensable que controle sus valores de presión sanguínea varias veces por semana. Caso contrario, podría presentar complicaciones silenciosas debido al efecto que produce la hipertensión arterial sobre muchos órganos.</p>
								<p>¿Cómo controlar la presión arterial?</p>
								<p>Las siguientes medidas pueden contribuir al control de la presión arterial:</p>
								<p> - Perder peso
									- Aumentar la actividad física <br>
									- Limitar la ingesta de sal <br>
									- Limitar la ingesta de alcohol <br>
									- Dejar de fumar <br>
								- Tomar la medicación aconsejada por tu médico</p>
								<p>Cuando se requiere este servicio, por favor acérquese a la Oficina de Primeros Auxilios ubicada en el primer piso de Institución.</p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="img/bienestar/tension_arterial.jpg"></div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>Auto cuidado y manejo responsable de la sexualidad, derechos sexuales y reproductivos, conocimiento de Infecciones de Transmisión Sexual, su prevención y el manejo de ellas con asesoría en enfermería. <br>
									- Higiene íntima. <br>
									- Asesoría en planificación familiar. <br>
									- Autoexamen de mamas
								</p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="img/bienestar/asesorias_educacion_sexual.jpg"></div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								Es un programa que informa y educa a la comunidad universitaria sobre la importancia que tiene el respeto consigo mismo, con el auto cuidado y el aprendizaje significativo de estilos de vida que favorezcan la salud física y mental.
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="img/bienestar/promocion_y_prevencion.jpg"></div>
						</div>
						<div class="tab-pane fade p-3 fondo-gris-os" id="v-pills-act-deportivas" role="tabpanel" aria-labelledby="v-pills-act-deportivas-tab">
							<div class="col-12 p-2 px-md-5 text-justify">
								<p>Durante la realización de cualquier actividad deportiva y cultural AUNAR, se tiene acompañamiento de personal experto en cada área y que garantice las condiciones óptimas en cada evento.</p>
							</div>
							<div class="col-12 p-2 px-md-5"><img class="img-fluid" width="100%" src="img/bienestar/acompanamiento_actividades_deportivas.jpg"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<?php include_once('secciones/footer-principal.php');?>
		
		
	</body>
</html>