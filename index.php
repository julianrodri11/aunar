<!DOCTYPE html>
<html lang="es">
<head>
  <?php /*ENLACES DE LIBRERIAS */ include_once('links-local.php');  ?> 

  <!--TÍTULO DE LA PÁGINA-->
  <title>.::AUNAR::. - ::::CORPORACIÓN UNIVERSITARIA AUTÓNOMA DE NARIÑO</title>  
  
</head>
<body>



<!-- --------------------MODAL INICIAL----------------------- -->
<?php include_once('modal/modal-inicial-1.php');?>
<!-- -------------------FIN MODAL INICIAL-------------------- -->

<!-- ------------------MODAL TRADUCTOR----------------------- -->
<?php include_once('modal-traductor.php');?>
<!-- ----------------FIN MODAL TRADUCTOR--------------------- -->

<!-------------------MENÚ PRINCIPAL-------------------------- -->
<?php include_once('menu1.php');?>
<!-------------------FIN MENÚ PRINCIPAL----------------------- -->

<!----------------------- LOGO CENTRAL ----------------------- -->       
<?php include_once('logo-central.php');?>
<!-- -----------------------FIN LOGO CENTRAL------------------ -->

<!-- ------------------FIGURA ZOOM---------------------------- -->
<?php include_once('zoom.php');?>
<!-- ------------------FIN ZOOM------------------------------- -->

<!-- ------------------REDES SOCIALES------------------------- -->
<?php include_once('redes-sociales-aunar.php');?>
<!-- ------------------FIN REDES SOCIALES--------------------- -->

<!-- -----------------SLIDER---------------------------------- -->
<?php include_once('slider/slider-1.php');?>
<!-- -----------------FIN SLIDER------------------------------ -->

<!-- ----------------MENÚ INSTITUCIONAL----------------------- -->  
 <?php include_once('menu2.php');?>
<!-- ----------------FIN MENÚ INSTITUCIONAL------------------- -->

<!-- ----------------MENÚ INSTITUCIONAL----------------------- -->   
 <?php include_once('modal/modal-contactenos.php');?>
<!-- ----------------FIN MENÚ INSTITUCIONAL------------------- -->


<!-- ------------------------DOCUMENTOS----------------------- -->

<div class="container-fluid fondo-gris-c">
  <div class="row pt-5 pb-5 ">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="row p-3 fondo-azul text-white">
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/cronograma_general2017_1.pdf" data-toggle="tooltip" data-placement="left" title="Ver Cronograma General 2017-1" target="_blank">Calendario Académico 2017-1</a></div>
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/cronograma_general2017_2.pdf" data-toggle="tooltip" data-placement="left" title="Ver Calendario Académico 2017-2" target="_blank">Calendario Académico 2017-2</a></div>
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/cronograma_general2018_1.pdf" data-toggle="tooltip" data-placement="left" title="Ver Calendario Académico 2018-1" target="_blank">Calendario Académico 2018-1</a></div>          
        </div>
    </div>
    <div class="col-lg-7 col-md-6 col-sm-12 text-center">
        <div class="row">
          <div class="col-12 p-2">
            <a href="docs/derechos_pecuniarios2018.pdf"  data-toggle="tooltip" data-placement="top" title="Click para ver derechos pecuniarios" target="_blank"> <img  class=" img-fluid" alt="Derechos pecuniarios autonoma de nariño" src="img/derechos.png"></a>
          </div>
          <div class="col-12 p-2 texto-azul">Los siguientes son los montos de los derechos pecuniarios por servicios académicos y administrativos para el año 2018, debidamente aprobados por el Consejo Directivo de la Corporación Universitaria Autónoma de Nariño</div>
        </div>
    </div>
    <div class="col-lg-2 col-md-3 col-sm-12 border-left borde-azul">
        <div class="pt-1 pl-1 mt-sm-5  text-center  "><h3 class=" mt-0 fuente-institucional texto-azul f-negrita">Plan de Inversión</h3></div>
    </div>
  </div>
</div>

<!-- --------------------FIN DOCUMENTOS----------------------- -->

<!-- ----------------DONDE QUIERES ESTUDIAR------------------- -->
<div class="container-fluid">
  <div class="row fondo-mundo">
     <div class="row col-12">
      <div class="row col-12 col-lg-6 col-xl-6 p-2  d-flex align-content-center justify-content-center">
        <div class="col-11 col-lg-10 fondo-amarillo mt-2">
          <h1 class="f-negrita fuente-institucional text-center">¿Donde quieres estudiar?</h1>
        </div>
        <div class="col-12 col-lg-10 text-center text-light fuente-institucional p-3">
          <strong>AUNAR</strong> te permite elegir tu programa de interés para que estudies en cualquier sede del país
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-6 p-2 ">
        <div class="row  d-flex justify-content-end mr-lg-2">          
          <div class="row col-12 col-lg-8 p-2 m-1">
            
            <form class="col-12">
  
              <div class="form-group pt-sans">                
                <select class="form-control" id="exampleSelect1">
                  <option>Seleccione Programa</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group pt-sans">                
                <select class="form-control" id="exampleSelect1">
                  <option>Seleccione Sede</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="form-group pt-sans">                
                <select class="form-control" id="exampleSelect1">
                  <option>Seleccione Modalidad</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
             
              <button type="submit" class="btn btn-primary fondo-amarillo float-right f-negrita pt-sans">Enviar</button>
            </form>

          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ---------------- FIN DONDE QUIERES ESTUDIAR-------------- -->



<!-- ----------------SECCIÓN NOTICIAS------------------------- -->
<?php include_once('noticias/noticia-1.php');?>
<!-- ----------------FIN SECCIÓN NOTICIAS--------------------- -->


<!-- ----------------OFERTAS DE INTERES ---------------------- -->
<div class="container-fluid fondo-gris-os p-4 ">
  <div class="row">
    <div class="col-12 col-lg-12">
      <div class="row texto-azul d-flex justify-content-center">
        <div class="col-10 pl-5 pr-5 pb-2 text-center fuente-institucional f-negrita f-size-16">Recuerda que la Corporación Universitaria Autónoma de Nariño, también cuenta con programas de formación continua para que perfecciones tu perfil profesional.</div>
        <div class="col-10 text-center text-center"><strong> AUNAR</strong> te ofrece la siguiente oferta educativa: <a class="texto-amarillo-oscuro f-negrita" href="">Cursos, </a><a class="texto-amarillo-oscuro f-negrita" href="">Diplomados, </a><a class="texto-amarillo-oscuro f-negrita" href="">Seminarios</a> </div>
      </div>
    </div>
    <div class="col-12 col-lg-12 d-flex align-items-center justify-content-center ">
      <div class="text-center ">
        <a href="#" class="p-2 border borde-azul badge badge-pill bg-white hover-texto-blanco hover-amarillo  texto-azul">Ver Oferta</a>
        </div>
    </div>
  </div>
</div>
<!-- ----------------FIN OFERTAS DE ITENRES--------------------- -->



<!-- -----------------MENU ICONOS----------------------------- -->
<?php include_once('menu3.php');?>
<!-- -----------------FIN MENÚ ICONOS------------------------- -->



<!-- -----------------EVENTOS--------------------------------- -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2 p-2 d-flex align-items-center justify-content-center justify-content-sm-center justify-content-md-center">
        
          <div class="p-1 mt-5 mt-sm-5 bd-highlight border-right borde-amarillo borde-ancho text-center pr-3">
            <h1 class="my-1 fuente-institucional texto-azul f-negrita">Eventos</h1>
            <label class="texto-azul fue">Entérate nuestras novedades</label>
          </div>
          <!-- div class="p-1 bg-primary bd-highlight">Flex item 2</div>
          <div class="p-1 bg-white bd-highlight">Flex item 3</div> -->                
    </div>

    <div class="col-lg-10 p-5 ">
      <div class="row p-3 ">
        <div class="col-md-6 p-2  border-right border-white fondo-gris-os">
          <div class="col p-2 text-center"><img class="img-fluid" alt="Responsive image" src="img/aunar_stereo.png"/></div>
          <div class=" texto-azul text-center ">
            <div class="row">
                <div class="col-12 mb-0 p-0 fuente-institucional ">AUNAR STEREO</div>
                <div class="col-12 "><label class="f-size-14">¡Tú también puedes ser un creador de espacios de diálogo!</label></div>
            </div>
          </div>
        </div>
        <div class="col-md-6 p-3 ">           
            <div class="col-12 p-4 mb-3 ">
            
              <!-- seccion de eventos  -->
              <!-- evento 1 -->
              <div class="row p-3 hover-texto-blanco hover-borde-blanco hover-amarillo d-flex align-items-center texto-azul">
                <div class="col-md-4 col-12 ">
                  <div class="circulo">
                    <div class="row pt-2 text-center "> 
                      <span class="col-12">10</span>
                      <span class="col-12">May</span>
                    </div>
                  </div>
                </div> 
                <div class="col-md-8 col-12">
                  <div class="row texto-azul">
                    <div class="col-lg-12 text-center text-lg-left text-md-left">II Encuentro de Bibliotecas.</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">RED UREL</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- evetnos 2 -->
               <div class="row p-3 hover-texto-blanco hover-borde-blanco hover-amarillo d-flex align-items-center texto-azul">
                <div class="col-md-4 col-12 ">
                  <div class="circulo">
                    <div class="row pt-2 text-center "> 
                      <span class="col-12">10</span>
                      <span class="col-12">May</span>
                    </div>
                  </div>
                </div> 
                <div class="col-md-8 col-12">
                  <div class="row texto-azul">
                    <div class="col-lg-12 text-center text-lg-left text-md-left">II Encuentro de Bibliotecas.</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">RED UREL</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- evento 3 -->
               <div class="row p-3 hover-texto-blanco hover-borde-blanco hover-amarillo d-flex align-items-center texto-azul">
                <div class="col-md-4 col-12 ">
                  <div class="circulo">
                    <div class="row pt-2 text-center "> 
                      <span class="col-12">10</span>
                      <span class="col-12">May</span>
                    </div>
                  </div>
                </div> 
                <div class="col-md-8 col-12">
                  <div class="row texto-azul">
                    <div class="col-lg-12 text-center text-lg-left text-md-left">II Encuentro de Bibliotecas.</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">RED UREL</div>
                    <div class="col-lg-12 text-center text-lg-left text-md-left">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- fin sección eventos -->

          </div>            
        </div>

      </div>
    </div>   
  </div>
</div>
<!-- ----------------FIN EVENTOS------------------------------ -->


<!-- -----------------IMAGENES ENLACES DE EXTERNOS----------------------------- -->
  <?php include_once('enlaces-externos-aunar.php') ?>
<!-- -----------------FIN ENLACES DE EXTERNOS------------------------- -->


	
<!-- ----------------PIE DE PÁGINA---------------------------- -->
	<?php include_once('footer-principal.php') ?>
<!-- -------------------FIN PIE DE PÁGINA--------------------- -->




</body>
</html>

