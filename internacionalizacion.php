<!DOCTYPE html>
<html lang="es">
	<head>
		<?php /*ENLACES DE LIBRERIAS */ include_once('secciones/links-local.php');  ?>
		<!--TÍTULO DE LA PÁGINA-->
		<title>BIENESTAR INSTITUCIONAL - AUTÓNOMA DE NARIÑO</title>
		
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
					<img class="mx-auto img-fluid" width="100%" src="img/proyeccion_institucional/internacionalizacion_aunar.jpg"/>
				</div>
			</div>
		</div>
		
		
		<?php include_once('secciones/menu_proyeccioni.php');?>

		<div class="container-fluid texto-azul-os py-4">
			<div class="row">
				<!-- slider bienestar -->
				<div class="col-12 col-md-5">
					<?php include_once('slider/internacionalizacion.php');?>

				</div>
				<!-- ultimas noticias -->
				<div class="col-12 col-md-7">
					<div class="row">
						<div class="col-12 col-lg-10">
							<div class="row">
								<div class="col-8 p-2 fondo-azul-oscuro text-white pl-4"><h3>Últimas Noticias</h3></div>
								<div class="col-4 p-2 fondo-azul-oscuro texto-amarillo">Conoce más</div>
							</div>
						</div>
						<div class="col-12 col-lg-10">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Contador:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-lg-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Día del Padre:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
						<div class="col-12 col-lg-10">
						<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">El Parche AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
						</div>
						</div>
						<div class="col-12 col-lg-10 fondo-gris-os">
							<div class="row">
								<div class="col-12 col-lg-4 p-2 f-negrita">Fiestas AUNAR:</div>
								<div class="col-12 col-lg-8 p-2">Recuerda que hoy celebramos el día del contador en #AunarPasto... </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid texto-azul-os">
			<div class="row fondo-gris-c">
				<!-- misión -->
				<div class="col-12 col-md-5 m-lg-4">
					<div class="row m-md-2 p-md-5 ">
						<div class="col-12 pt-5"><h3 class="fuente-institucional f-negrita"> Misión</h3></div>
						<div class="col-12 text-justify pt-sans">La oficina de internacionalización tiene como misión, promover el movimiento de la comunidad universitaria hacia otras instituciones académicas, empresariales, científicas, culturales, artísticas, gubernamentales o deportivas, de carácter local, regional, nacional e internacional.  </div>

					</div>
				</div>
				<!-- visión -->
				<div class="col-12 col-md-5 m-lg-4 border-left borde-amarillo">
					<div class="row m-md-2 p-md-5 ">
						<div class="col-12 pt-5"><h3 class="fuente-institucional f-negrita"> Visión</h3></div>
						<div class="col-12 text-justify pt-sans">Posicionar a la Corporación Universitaria Autónoma de Nariño, en un mundo globalizado, a través de alianzas estratégicas y de cooperación a nivel regional, nacional e internacional. </div>

					</div>
				</div>
				
			</div>
		</div>

		

		<div class="container-fluid">
			<div class="row fuente-institucional">
				<div class="col-12 pt-5 m-4"><h3 class="fuente-institucional f-negrita texto-azul-os text-center mx-auto">PROGRAMAS Y PROYECTOS  AUNAR</h3></div>
			</div>			
		</div>
		<div class="container-fluid">
			<div class="row ">
				<div class="col-12 d-flex justify-content-around">
				<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
				  <li class="nav-item fondo-gris-os d-flex  align-items-center ">
				    <a class="nav-link texto-azul-os f-negrita fuente-institucional p-4 hover-amarillo align-self-stretch text-center" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">¿Que es la  Internacionalización?</a>
				  </li>
				  <li class="nav-item fondo-gris-c d-flex  align-items-center ">
				    <a class="nav-link texto-azul-os f-negrita fuente-institucional p-4 hover-amarillo align-self-stretch text-center" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Tipos de Movilidad</a>
				  </li>
				  <li class="nav-item fondo-gris-os d-flex  align-items-center ">
				    <a class="nav-link texto-azul-os f-negrita fuente-institucional p-4 hover-amarillo align-self-stretch text-center" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Convenios</a>
				  </li>
				  
				</ul>
			</div>
		</div>
		<div class="row d-flex justify-content-center">
			<div class="col-8">
				<div class="tab-content m-5" id="pills-tabContent">
				  <div class="tab-pane fade pt-sans texto-azul-os text-justify show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				  	Tumaquito es un asentamiento de población afro desplazada por la violencia, el cual se encuentra ubicado en Anganoy... #AunarPasto a través de #AunarProyecciónSocial se preocupó por sus necesidades y decidió empezar un proceso de fortalecimiento comunitario con la ayuda de la Fundación Comuniquemos su Misericordia y el Servicio Jesuita a Refugiados: 3 Visualiza este corto video para que tú también conozcas esta experiencia :) ¡Aquí estamos comprometidos con nuestra comunidad!
					<br>
					<?php include_once('modal/modal-video-tumaco.php');?>
					<a class="btn text-light fondo-azul-oscuro pt-sans hvr-forward" data-toggle="modal"   data-target="#modalVideoTumaco" >Ver Vídeo</a>
				  </div>
				  <div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
				  	* 2 - Construir comunidad y fortalecerla. De ahí que las actividades que se programen formen parte de los planes de estudio, con oportunidades para todos los estamentos de la Universidad en igualdad de condiciones.<br>
					* 2 - Organizar, planificar y ejecutar programas de Bienestar, manteniendo una adecuada coordinación entre las distintas dependencias, tanto administrativas como académicas a través de los comités creados para ello (Comités Académicos y Administrativos).<br>
					* 2 - Apoyar la formación integral de los estudiantes y el bienestar general de directivos, profesores y personal administrativo de la Universidad, favoreciendo el crecimiento personal y de grupo, a través de las diversas actividades programadas, con el fomento del deporte, la recreación, la salud física y psicológica y los valores, éticos y humanísticos que fomenta la Universidad.<br>
					* 2 - Realizar estudios de evaluación socioeconómica de la comunidad Universitaria con el apoyo de las facultades o de los centros de investigación.<br>
					* 2 - Prever y facilitar los escenarios deportivos adecuados para la práctica de los deportes básicos, de la cultural, de la lúdica y recreación en general y adecuar los horarios que permitan a la comunidad universitaria participar y desarrollar las actividades que demanda el usuario del servicio y las exigencias curriculares y académicas.<br>
					* 2 - Articular el proyecto de vida individual de los miembros de la Comunidad AUNAR con el Proyecto Educativo Institucional (PEI). <br>
					* 2 - El cubrimiento de los programas de Bienestar Institucional debe incluir toda la comunidad AUNAR (estudiantes, docentes, personal administrativo y egresados).<br>
				  	
				  </div>
				  <div class="tab-pane fade pt-sans texto-azul-os text-justify" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
				  	* 3 - Construir comunidad y fortalecerla. De ahí que las actividades que se programen formen parte de los planes de estudio, con oportunidades para todos los estamentos de la Universidad en igualdad de condiciones.<br>
					* 3 - Organizar, planificar y ejecutar programas de Bienestar, manteniendo una adecuada coordinación entre las distintas dependencias, tanto administrativas como académicas a través de los comités creados para ello (Comités Académicos y Administrativos).<br>
					* 3 - Apoyar la formación integral de los estudiantes y el bienestar general de directivos, profesores y personal administrativo de la Universidad, favoreciendo el crecimiento personal y de grupo, a través de las diversas actividades programadas, con el fomento del deporte, la recreación, la salud física y psicológica y los valores, éticos y humanísticos que fomenta la Universidad.<br>
					* 3 - Realizar estudios de evaluación socioeconómica de la comunidad Universitaria con el apoyo de las facultades o de los centros de investigación.<br>
					* 3 - Prever y facilitar los escenarios deportivos adecuados para la práctica de los deportes básicos, de la cultural, de la lúdica y recreación en general y adecuar los horarios que permitan a la comunidad universitaria participar y desarrollar las actividades que demanda el usuario del servicio y las exigencias curriculares y académicas.<br>
					* 3 - Articular el proyecto de vida individual de los miembros de la Comunidad AUNAR con el Proyecto Educativo Institucional (PEI). <br>
					* 3 - El cubrimiento de los programas de Bienestar Institucional debe incluir toda la comunidad AUNAR (estudiantes, docentes, personal administrativo y egresados).<br>
				  	
				  </div>			  

				</div>
					
				</div>
			</div>
		</div>
		
		<div class="container-fluid p-5 ">
			<div class="row m-3 fuente-institucional texto-azul-os d-flex justify-content-center">
				<div class="col-lg-6 ">
				<!-- Personal -->
				<div class="media border-bottom borde-amarillo pb-3">
				  <img src="img/proyeccion_institucional/gabriela_sthefanny_vargas.png" class="align-self-center mr-3 rounded-circle" width="180px" >
				  <div class="media-body ">
				    <h4 class="fuente-institucional texto-amarillo f-negrita">PROFESIONAL ENCARGADO</h4>
				    <div class="pt-sans">
				    <p><label class="texto-azul-os f-negrita"> GABRIELA STHEFANNY VARGAS GUZMÁN </label><br>
				    Administradora de Empresas (Universidad de Nariño)<BR>
					Magíster en Intervención Social (Universidad Internacional de la Rioja) <br>
				    Formación en innovación social y emprendimiento.<br>
					Investigadora Corporación Universitaria Autónoma de Nariño<br>
					Teléfono: 7226020 ext 112 <br>
				    Correo electrónico gabriela.vargas@aunar.edu.co  </p>
				    </div>
				  </div>
				</div>
				</div>

				<div class="col-lg-6 ">
				<!-- Personal -->
				<div class="media border-bottom borde-amarillo pb-3">
				  <img src="img/proyeccion_institucional/gabriela_sthefanny_vargas.png" class="align-self-center mr-3 rounded-circle" width="180px" >
				  <div class="media-body ">
				    <h4 class="fuente-institucional texto-amarillo f-negrita">PROFESIONAL ENCARGADO</h4>
				    <div class="pt-sans">
				    <p><label class="texto-azul-os f-negrita"> GABRIELA STHEFANNY VARGAS GUZMÁN </label><br>
				    Administradora de Empresas (Universidad de Nariño)<BR>
					Magíster en Intervención Social (Universidad Internacional de la Rioja) <br>
				    Formación en innovación social y emprendimiento.<br>
					Investigadora Corporación Universitaria Autónoma de Nariño<br>
					Teléfono: 7226020 ext 112 <br>
				    Correo electrónico gabriela.vargas@aunar.edu.co  </p>
				    </div>
				  </div>
				</div>
				</div>			
			</div>
			
		</div>

			<?php include_once('secciones/footer-principal.php');?>
			
		</body>
	</html>