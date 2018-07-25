<!-- malla curricular -->
<div class="container-fluid mb-5">
	<div class="row  fuente-institucional texto-azul">
		<div class="col-4 p-4  hover-texto-blanco text-center fondo-amarillo-intenso f-negrita pointer">
			<a class="texto-azul-os sin-texto-subrayado" target="_blanck" href="docs/malla_curricular/ingenieria_electronica.pdf">Malla Curricular</a>
		</div>
		<div class="col-4"></div>
		<div class="col-4 p-4  hover-texto-blanco text-center fondo-amarillo-intenso f-negrita">Grupos de Investigacón</div>
		
	</div>
	
	
	<!-- slider de cada carrera -->
	<div class="row">
		
		<?php  include_once('slider/slider_electronica_docentes.php')?>
		
	</div>
	<!-- fin slider de cada carrera -->
	
	<!-- acordion -->
	<div class="container">
		<div id="accordion" class="accordion">
			<div class="card mb-0 sin-borde">
				
				<div class="row d-flex justify-content-center">
					<!-- lado ziquierdo -->
					<div class="col-12 col-md-6 pt-sans texto-azul-os">
						
						<div class="card-header collapsed bg-white f-negrita" data-toggle="collapse" href="#collapseOne">
							<a class="card-title pl-3 pt-sans texto-azui-os f-negrita a-new">
								Cristian Castro
							</a>
						</div>
						<div id="collapseOne" class="collapse" data-parent="#accordion" >
							<div class="card-body p-4 text-justify">
								Físico - Universidad De Nariño
							</div>
						</div>
						
						<div class="card-header collapsed bg-white f-negrita" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
							<a class="card-title pl-3 pt-sans texto-azui-os f-negrita a-new">
								Fredy Alexis Dulce Mera
							</a>
						</div>
						<div id="collapseTwo" class="collapse" data-parent="#accordion" >
							<div class="card-body p-4 text-justify">
								Ingeniero Electrónico – Universidad De Nariño <br>
								Magíster En Ingeniería Electrónica Y De Computadores – Universidad De Los Andes
							</div>
						</div>
						
						<div class="card-header collapsed bg-white f-negrita" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
							<a class="card-title pl-3 pt-sans texto-azui-os f-negrita a-new">
								Nohora Lucía España Mejía
							</a>
						</div>
						<div id="collapseThree" class="collapse" data-parent="#accordion" >
							<div class="card-body p-4 text-justify">
								Magíster En Ingeniería Electrónica Y De Computadores - Universidad De Los Andes <br>
								Ingeniera Electrónica - Universidad De Nariño
							</div>
						</div>
					</div>
					<!-- fin lado ziquierdo -->
				</div>
			</div>
		</div>
	</div>
	<!-- fin acordeon -->
</div>