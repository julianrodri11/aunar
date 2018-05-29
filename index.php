<!DOCTYPE html>
<html lang="es">
<head>
  <?php /*ENLACES DE LIBRERIAS */ include_once('links-local.php');  ?> 

  <!--TÍTULO DE LA PÁGINA-->
  <title>.::AUNAR::. - ::::CORPORACIÓN UNIVERSITARIA AUTÓNOMA DE NARIÑO</title>  
  
</head>
<body>




<!-- --------------------MODAL INICIAL----------------------- -->
<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title fuente-institucional texto-azul">Bienvenidos</h4>
          <button type="button" class="close" data-dismiss="modal">×</button>
          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <!-- ---------- -->
          <!-- Media middle -->
               <div class="card-group fuente-institucional texto-azul">
                <div class="card">
                  <img class="card-img-top" src="http://fpoimg.com/450x150?text=Preview&bg_color=fd8c8c&text_color=ffffff" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title f-negrita">Lorem ipsum.</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, eaque aliquam. Voluptate saepe, veniam unde!</p>
                    <p class="card-text"><small class="text-muted">Lorem ipsum. Last updated 3 mins ago</small></p>
                  </div>
                </div>
               
              </div>

 <!-- --------silider-------- -->
              
                <div id="myCarousel" class="carousel slide" data-ride="carousel">

                  <!-- Indicators -->
                  <ul class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ul>
                  
                  <!-- The slideshow -->
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="img-fluid" src="http://dummyimage.com/400x150/3f73f5/333.png?text=AUTÓNOMA" alt="Los Angeles" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                      <img class="img-fluid" src="http://imgholder.ru/400x150/6c35e3/333.png?text=placeholder" alt="Chicago" width="1100" height="500">
                    </div>
                    <div class="carousel-item">
                      <img class="img-fluid" src="http://fpoimg.com/400x150?text=Preview&bg_color=fdb08c" alt="New York" width="1100" height="500">
                    </div>
                  </div>
                  
                  <!-- Left and right controls -->
                  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>
              <!-- ----------------------- -->

          <!-- ----------- -->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-warning">Ver más</button>
          <button type="button" class="btn fondo-azul-oscuro text-white" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
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


<!-- ------------------FIGURA ZOOM------------------------- -->
<?php include_once('zoom.php');?>
<!-- ------------------FIN ZOOM--------------------- -->


<!-- ------------------REDES SOCIALES------------------------- -->
<?php include_once('redes-sociales-aunar.php');?>
<!-- ------------------FIN REDES SOCIALES--------------------- -->



<!-- -----------------SLIDER---------------------------------- -->


<div id="carouselExampleIndicators" class="carousel slide mt-lg-5 mt-md-4 mt-sm-4 mt-5 pt-2 " data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <a href="inscripciones.php"> <img data-toggle="tooltip" data-placement="auto" title="Ver más sobre la oferta académica" class="d-block w-100" src="img/slider1.jpg" alt="First slide"></a>
      <div class="carousel-caption">
        <h3></h3>
        <p></p>
      </div> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider2.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h3>Lorem Fuga, nesciunt </h3>
        <p>voluptatibus consectetur, consequuntur nemo necessitatibus.</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider3.jpg" alt="Second slide">
      <div class="carousel-caption">
        <h3>Lorem ipsum.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
      </div> 
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/slider2.jpg" alt="Third slide">
      <div class="carousel-caption">
        <h3>Lorem.</h3>
        <p>Lorem ipsum dolor sit.</p>
      </div> 
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon " aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon " aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<!-- -----------------FIN SLIDER------------------------------ -->




<!-- ----------------MENÚ INSTITUCIONAL----------------------- -->  
 <?php include_once('menu2.php');?>
<!-- ----------------FIN MENÚ INSTITUCIONAL------------------- -->


<!-- ------------------------DOCUMENTOS----------------------- -->
<div class="container-fluid fondo-gris-c">
  <div class="row pt-5 pb-5 ">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="row p-3 fondo-azul text-white">
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/cronograma_general2017_1.pdf" data-toggle="tooltip" data-placement="left" title="Ver Cronograma General 2017-1" target="_blank">Cronograma General 2017-1</a></div>
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/cronograma_general2017_2.pdf" data-toggle="tooltip" data-placement="left" title="Ver Cronograma General 2017-2" target="_blank">Cronograma General 2017-2</a></div>
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="docs/cronograma_general2018_1.pdf" data-toggle="tooltip" data-placement="left" title="Ver Cronograma General 2018-1" target="_blank">Cronograma General 2018-1</a></div>          
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



<!-- ----------------SECCIÓN NOTICIAS------------------------- -->

<!-- -- título notiicas ------------ -->
<div class="container-fluid">
  <div class="row"> 
    <div class="col-lg-2 col-sm-12 col-md-4 pt-sm-4  d-flex align-items-center justify-content-center">
      <div class="row ">
        <div class="col-12 ">
          <div class="row ">            
              <div class=" col-4 fondo-amarillo sombra-iconos icono-blanco text-center "><i class="fa fa-envelope" ></i></div>
              <div class=" col-8 fondo-azul text-white">Necesitas ayuda? Contáctanos</div>
          </div>
        </div>        
      </div>
    </div>
    <div class="col-lg-8 col-sm-12 col-md-6  text-center border-bottom borde-azul">
      <div class="row">          
          <div class="col-12 pt-1 pl-1 mt-sm-5  text-center  "><h2 class=" mt-0 fuente-institucional texto-azul f-negrita">Noticias</h2></div>          
          <div class="col-12 pb-2 texto-azul">¡Conoce las principales acciones y logros de nuestra comunidad!</div>
      </div>
    </div>    
  </div>
</div>
<!-- -- Fin título notiicas -------- -->

<!-- inicio de noticias -->
<div class="container-fluid">
  <div class="row d-flex align-items-stretch ">
    
    <!-- noticia 1 -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
      <div class="text-center p-5  ">
            <label class="texto-amarillo f-negrita f-size-18">MAQUINARTE: </label> <label class="texto-azul f-size-14">IX MUESTRA DE PROYECTOS DE INGENIERÍA</label>            
            <div class="text-justify">
            <p class="texto-azul f-myriad">La sub Red de facultades de Ingenierías de Nariño, invita a todos los investigadores de #AunarIngenierías para que participen de este importante evento...</p>
            <a href="#" class="p-2 border borde-azul badge badge-pill hover-amarillo hover-texto-blanco float-right texto-azul">Conoce más</a>
            </div>
      </div>
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5 text-center"><img class="img-fluid " src="img/noticia1.png" alt="Noticias Aunar"></div>


    <!-- noticia 2 -->
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 p-5 text-center"><img class="img-fluid " src="img/noticia2.png" alt="Noticias Aunar"></div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 d-flex align-items-center">
      <div class="text-center p-5  ">
            <label class="texto-amarillo f-negrita f-size-18">Michael Villota, </label> <label class="texto-azul f-size-14">el pastuso que representará a Colombia</label>            
            <div class="text-justify">
            <p class="texto-azul f-myriad">Charlamos con Michael Villota, un joven de 22 años de edad y estudiante del programa de Ingeniería Mecánica de la Corporación Universitaria Autónoma de Nariño. Gracias a su pasión, dedicación y reconocimientos obtenidos en el karate Do, Michael viajará en el mes de julio del presente año a Japón para representar a Colombia en este deporte</p>
            <a href="#" class="p-2 border borde-azul badge badge-pill hover-amarillo hover-texto-blanco float-right texto-azul">Conoce más</a>
            </div>
      </div>
    </div>    
  </div>  
</div>


<!-- ----------------FIN SECCIÓN NOTICIAS--------------------- -->


<!-- ----------------OFERTAS DE INTERES ---------------------- -->
<div class="container-fluid fondo-gris-os p-3 mb-3">
  <div class="row">
    <div class="col-12 col-lg-8">
      <div class="row texto-azul">
        <div class="col-12 pl-5 pr-5 pb-2 text-center">Recuerda que la Corporación Universitaria Autónoma de Nariño, también cuenta con programas de formación continua para que perfecciones tu perfil profesional.</div>
        <div class="col-12 text-center text-lg-right"><strong> AUNAR</strong> te ofrece la siguiente oferta educativa: <a class="texto-amarillo-oscuro f-negrita" href="">Cursos, </a><a class="texto-amarillo-oscuro f-negrita" href="">Diplomados, </a><a class="texto-amarillo-oscuro f-negrita" href="">Seminarios</a> </div>
      </div>
    </div>
    <div class="col-12 col-lg-4 d-flex align-items-center justify-content-center ">
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


<!-- -----------------IMAGENES ENLACES DE INTERES----------------------------- -->
<div class="container-fluid p-4  fondo-amarillo bg-white fuente-institucional">
  <div class="row text-center justify-content-center  ">    
    <div class=" col-12 fuente-institucional texto-azul f-negrita "><h2 class="pb-4 fuente-institucional texto-azul f-negrita">Enlaces de interés</h2></div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Correo Aunar</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Sistema Académia</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Icfes</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Eduteka</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Dpto de Ciencia y Tecnología</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Colombia Aprende</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Banco Pichincha</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Comuna</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Otro enlace ...</p> </div>
    <!-- <div class=" col-lg-1 col-md-2 col-sm-4 col-6 "><div class="circulo p-3"><i class="fa fa-graduation-cap sombra-iconos">      </i></div><p class="pt-2 mb-0">Bisel Estudiantes</p> </div>
    <div class=" col-lg-1 col-md-2 col-sm-4 col-6 "><div class="circulo p-3"><i class="fa fa-leanpub sombra-iconos" >      </i></div><p class="pt-2 mb-0">Publicaciones</p> </div>       
    <div class=" col-lg-1 col-md-2 col-sm-4 col-6 "><div class="circulo p-3"><i class="fa fa-book sombra-iconos" >       </i></div><p class="pt-2 mb-0">Biblíoteca</p> </div>        -->
  </div>
</div>
<!-- -----------------FIN ENLACES DE INTERES------------------------- -->


	
<!-- ----------------PIE DE PÁGINA---------------------------- -->
	<?php include_once('footer-principal.php') ?>
<!-- -------------------FIN PIE DE PÁGINA--------------------- -->




</body>
</html>

