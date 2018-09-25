<!DOCTYPE html>
<html lang="es">
	<head>
		<?php /*ENLACES DE LIBRERIAS */ include_once('secciones/links-local.php');  ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>VICERRECTORÍA ADMINISTRATIVA FINANCIERA - AUTÓNOMA DE NARIÑO</title>
		
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
					<img class="mx-auto img-fluid" width="100%" src="img/institucional/vicerrectoria_administrativa_y_financiera_portada.jpg" alt="VICERRECTORÍA ADMINISTRATIVA FINANCIERA"/>
				</div>
			</div>
		</div>
		
		<?php include_once('secciones/menu2.php');?>
		<?php include_once('secciones/menu_institucional.php');?>

		<!-- Slider -->
		<div class="container-fluid texto-azul-os py-4">
			<div class="row">
				<!-- slider bienestar -->
				<div class="col-12 col-md-5">
					<?php include_once('slider/slider-1.php');?>
				</div>
				<!-- ultimas noticias -->
				<div class="col-12 col-md-7 py-5 py-sm-0">
					<div class="row">
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-8 p-2 fondo-azul-oscuro text-white pl-4"><h3>Últimas Noticias</h3></div>
								<div class="col-4 p-2 fondo-azul-oscuro texto-amarillo">Conoce más</div>
							</div>
						</div>
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Contador:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Padre:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">El Parche AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-md-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Fiestas AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Fin slider-->
		

	

		<?php include_once('secciones/footer-principal.php');?>
		
		
	</body>
</html>