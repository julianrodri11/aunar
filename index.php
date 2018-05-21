<!DOCTYPE html>
<html lang="es-CO">
<head>
  <?php //include_once('links-local.php'); 
         include_once('links-url.php'); 
  ?> 

  <script>

    /*EFECTO DE CONTRAER EL LOGO PRINCIPAL MENU1*/
    // window.onscroll = function() {efectologoaunar()};
    // function efectologoaunar() {
    //     if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    //         document.getElementById("efecto-borde1").className = "efecto-antes ";            
    //     } 
    //     else {
    //         document.getElementById("efecto-borde1").className = "efecto-despues ";            
    //     }
    // }

    /* activar tooltip para redes sociales cuando se ponga el mouse encima*/
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });
    


</script>
</head>
<body>	


<!-------------------MENÚ PRINCIPAL-------------------------- -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top  bg-white texto-azul " >
  <!-- <a class="navbar-brand " href="#">INICIO</a> -->  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon "></span>
  </button>

  <div class="collapse navbar-collapse f-size-14 " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-md-0 ml-sm-0 ml-0 ml-0  ">
      <li class="nav-item active pt-2 pb-2 hover-amarillo ">
        <a class="nav-link texto-azul pl-md-2 pl-sm-2  border-right borde-amarillo" href="#">Admisiones <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item pt-2 pb-2 hover-amarillo ">
        <a class="nav-link texto-azul pl-md-2 pl-sm-2 border-right borde-amarillo" href="#">Estudiantes</a>
      </li>
      <li class="nav-item pt-2 pb-2 dropdown hover-amarillo ">
        <a class="nav-link dropdown-toggle texto-azul pl-md-2 pl-sm-2 border-right borde-amarillo" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Docentes
        </a>
        <div class="dropdown-menu f-size-14" aria-labelledby="navbarDropdown">
          <a class="dropdown-item texto-azul" href="#">Opción 1</a>
          <a class="dropdown-item texto-azul" href="#">Opción 2</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item texto-azul" href="#">Separador y mas opciones</a>
        </div>
      </li>
      <li class="nav-item pt-2 pb-2 hover-amarillo ">
        <a class="nav-link texto-azul pl-md-2 pl-sm-2 border-right borde-amarillo" href="#">Convocatorias</a>
      </li>
      <li class="nav-item pt-2 pb-2 hover-amarillo ">
        <a class="nav-link active texto-azul pl-md-2 pl-sm-2 border-right borde-amarillo" href="#">Extensiones</a>
      </li>      
    </ul>
    <div class="rectangulo-sesgado pt-2 pb-2 ">
      <div class="row pt-3 mt-1 ml-0  float-right float-md-none">
                <div class=" f-italica f-negrita f-size-14 ">La Tecnología es el Cambio hacia un Mundo sin Fronteras</div>
                <span class="ml-1 mr-4  badge badge-pill badge-primary fondo-azul">Idioma</span>   
        </div>
    </div>    

    <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->

  </div>  

</nav>
<!-------------------FIN MENÚ PRINCIPAL----------------------- -->


<!----------------------- LOGO CENTRAL ----------------------- -->  
     
<div class="bg-primary d-flex justify-content-center  fixed-top " >
  <div class="col-3 col-sm-2 col-md-2 col-lg-1 p-2 mt-md-2 mt-sm-1 mt-2 position-absolute fondo-gris-c rounded-circle " id="efecto-borde1" data-toggle="tooltip" data-placement="bottom" title=".::AUTÓNOMA DE NARIÑO::." >
    <div class="p-2 fondo-gris-os rounded-circle" id="efecto-borde2">      
          <img class="rounded-circle  img-fluid rounded mx-auto d-block position-relative  "  alt="Responsive image" src="img/aunar.jpg">
    </div>
  </div>     
</div>
<!-- -----------------------FIN LOGO CENTRAL------------------ -->


<!-- ------------------FIGURA ZOOM------------------------- -->


    <div class="contenedor-zoom">      
      <div class="pl-1 ml-2">
        <div ><a class="text-white" href="#" data-toggle="tooltip" data-placement="left" title="Zoom -">A-</a></div>
        <div ><a class="text-white" href="#" data-toggle="tooltip" data-placement="left" title="Zoom +">A+</a></div>
        <div ><a class="text-white" href="#" data-toggle="tooltip" data-placement="left" title="ZOOM"><img src="img/contraste.png" width="22" ></a></div>        
      </div>
    </div>


<!-- ------------------FIN ZOOM--------------------- -->



<!-- ------------------REDES SOCIALES------------------------- -->


    <div class="contenedor-redes">
      <div class="tredes">Nuestras Redes</div>
      <div class="p-2 ml-2">
        <div><a href="#" data-toggle="tooltip" data-placement="left" title="Youtube"><img src="img/youtube.png" width="21" ></a></div>
        <div><a href="#" data-toggle="tooltip" data-placement="left" title="Flickr"><img src="img/flickr.png" width="21" ></a></div>
        <div><a href="#" data-toggle="tooltip" data-placement="left" title="Twitter"><img src="img/twitter.png" width="21" ></a></div>
        <div><a href="#" data-toggle="tooltip" data-placement="left" title="Instagram"><img src="img/instagram.png" width="21" ></a></div>
        <div><a href="#" data-toggle="tooltip" data-placement="left" title="Facebook"><img src="img/facebook.png" width="21" ></a></div>
      </div>
    </div>


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
      <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
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
  <ul class="nav justify-content-center  p-4  f-negrita">
    <li class="nav-item border-right borde-azul ">
      <a class="nav-link texto-azul hover-texto-amarillo" href="#">Institucional</a>
    </li>
    <li class="nav-item border-right borde-azul ">
      <a class="nav-link texto-azul hover-texto-amarillo" href="#">Oferta Académica</a>
    </li>
    <li class="nav-item border-right borde-azul ">
      <a class="nav-link texto-azul hover-texto-amarillo" href="#">Investigación</a>
    </li>
    <li class="nav-item border-right borde-azul ">
      <a class="nav-link texto-azul hover-texto-amarillo" href="#">Bienestar Universitario</a>
    </li>
    <li class="nav-item border-right borde-azul ">
      <a class="nav-link texto-azul hover-texto-amarillo" href="#">Proyección Institucional</a>
    </li>
    <li class="nav-item border-right borde-azul ">
      <a class="nav-link texto-azul hover-texto-amarillo" href="#">Aunar Virtual</a>
    </li>
    <li class="nav-item ">
      <a class="nav-link texto-azul hover-texto-amarillo" href="#">CIAN</a>
    </li>
  </ul>
<!-- ----------------FIN MENÚ INSTITUCIONAL------------------- -->


<!-- ------------------------DOCUMENTOS----------------------- -->
<div class="container-fluid fondo-gris-c">
  <div class="row pt-5 pb-5 ">
    <div class="col-lg-3 col-md-3 col-sm-12">
        <div class="row p-3 fondo-azul text-white">
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="#" data-toggle="tooltip" data-placement="left" title="Calendario 2017 2">Calendario Académico 2017-2</a></div>
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="#" data-toggle="tooltip" data-placement="left" title="Calendario 2017 1">Calendario Académico 2018-1</a></div>
          <div class="pr-3"><a class="fuente-institucional text-white hover-texto-amarillo" href="#" data-toggle="tooltip" data-placement="left" title="Calendario 2017 2">Calendario Académico 2018-2</a></div>          
        </div>
    </div>
    <div class="col-lg-7 col-md-6 col-sm-12 text-center">
        <div class="row">
          <div class="col-12">            
            <img  class=" img-fluid" alt="Responsive image" src="img/derechos.png">
          </div>
          <div class="col-12 pl-5 pr-5 texto-azul">Los siguientes son los montos de los derechos pecuniarios por servicios académicos y administrativos para el año 2018, debidamente aprobados por el Consejo Directivo de la Corporación Universitaria Autónoma de Nariño</div>
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
              <div class=" col-8 fondo-azul text-white">Necesitas  ? Contáctanos</div>
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
            <p class="texto-azul f-myriad">Charlamos con Michael Villota, un joven de 22 años de edad y estudiante del programa de Ingeniería Mecánica de la Corporación Universitaria Autónoma de Nariño. Gracias a su pasión, dedicación y reconocimientos obtenidos en el karate Do, Michael viajará en el mes de julio del presente año a Japón para representar a Colombia en este
deporte</p>
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
    <div class="col-8">
      <div class="row texto-azul">
        <div class="col-12 pl-5 -pr-5 text-center">Recuerda que la Corporación Universitaria Autónoma de Nariño, también cuenta con programas de formación continua para que perfecciones tu perfil profesional.</div>
        <div class="col-12 text-right"><strong> AUNAR</strong> te ofrece la siguiente oferta educativa: <a class="texto-amarillo-oscuro f-negrita" href="">Cursos, </a><a class="texto-amarillo-oscuro f-negrita" href="">Diplomados, </a><a class="texto-amarillo-oscuro f-negrita" href="">Seminarios</a> </div>
      </div>
    </div>
    <div class="col-4 d-flex align-items-center justify-content-center ">
      <div class="text-center ">
        <a href="#" class="p-2 border borde-azul badge badge-pill bg-white hover-texto-blanco hover-amarillo  texto-azul">Ver Oferta</a>
        </div>
    </div>
  </div>
</div>
<!-- ----------------FIN OFERTAS DE ITENRES--------------------- -->



<!-- -----------------MENU ICONOS----------------------------- -->
<div class="container-fluid p-4  fondo-amarillo ">
  <div class="row text-center justify-content-center  fuente-institucional f-x-small">    
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/periodico.svg" alt=""></div><p class="pt-2 mb-0">Periódico Estudiantil</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/album.svg" alt=""></div><p class="pt-2 mb-0">Albúm Fotográfico</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/v-institucional.svg" alt=""></div><p class="pt-2 mb-0">Video Institucional</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/astereo.svg" alt=""></div><p class="pt-2 mb-0">Aunar Stereo</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/aunartv.svg" alt=""></div><p class="pt-2 mb-0">Aunar TV</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/campus-virtual.svg" alt=""></div><p class="pt-2 mb-0">Campus Virutal</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/atech.svg" alt=""></div><p class="pt-2 mb-0">Aunar Tech</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/campus-presencial.svg" alt=""></div><p class="pt-2 mb-0">campus Presencial</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/bdocentes.svg" alt=""></div><p class="pt-2 mb-0">Bisel Docentes</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/bestudiantes.svg" alt=""></div><p class="pt-2 mb-0">Bisel Estudiantes</p> </div>
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/publicaciones.svg" alt=""></div><p class="pt-2 mb-0">Publicaciones</p> </div>       
    <div class=" col-xl-1 col-lg-1 col-md-2  col-sm-2 col-4 "><div class="p-2 "><img class="img-fluid " src="img/iconos/biblioteca.svg" alt=""></div><p class="pt-2 mb-0">Biblíoteca</p> </div>       
  </div>
</div>
<!-- -----------------FIN MENÚ ICONOS------------------------- -->



<!-- -----------------EVENTOS--------------------------------- -->
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-2 p-2 d-flex align-items-center justify-content-center justify-content-sm-center justify-content-md-center">
        
          <div class="p-1 mt-sm-5 bd-highlight border-right borde-amarillo borde-ancho text-center pr-3">
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
            <div class="col-md-12 p-4 mb-3 ">
            
              <!-- seccion de eventos  -->
              <!-- evento 1 -->
              <div class="row p-3 hover-texto-blanco hover-borde-blanco hover-amarillo d-flex align-items-center texto-azul">
                <div class="col-md-4 col-4">
                  <div class="circulo">
                    <div class="row pt-2 text-center "> 
                      <span class="col-12">10</span>
                      <span class="col-12">May</span>
                    </div>
                  </div>
                </div> 
                <div class="col-md-8 col-8">
                  <div class="row texto-azul">
                    <div class="col-lg-12">II Encuentro de Bibliotecas.</div>
                    <div class="col-lg-12">RED UREL</div>
                    <div class="col-lg-12">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- evetnos 2 -->
               <div class="row p-3 hover-texto-blanco hover-borde-blanco hover-amarillo d-flex align-items-center texto-azul">
                <div class="col-md-4 col-4">
                  <div class="circulo">
                    <div class="row pt-2 text-center "> 
                      <span class="col-12">10</span>
                      <span class="col-12">May</span>
                    </div>
                  </div>
                </div> 
                <div class="col-md-8 col-8">
                  <div class="row texto-azul">
                    <div class="col-lg-12">II Encuentro de Bibliotecas.</div>
                    <div class="col-lg-12">RED UREL</div>
                    <div class="col-lg-12">Hora: 8:00 am</div>
                  </div>
                </div>
              </div>
              <!-- evento 3 -->
               <div class="row p-3 hover-texto-blanco hover-borde-blanco hover-amarillo d-flex align-items-center texto-azul">
                <div class="col-md-4 col-4">
                  <div class="circulo">
                    <div class="row pt-2 text-center "> 
                      <span class="col-12">10</span>
                      <span class="col-12">May</span>
                    </div>
                  </div>
                </div> 
                <div class="col-md-8 col-8">
                  <div class="row texto-azul">
                    <div class="col-lg-12">II Encuentro de Bibliotecas.</div>
                    <div class="col-lg-12">RED UREL</div>
                    <div class="col-lg-12">Hora: 8:00 am</div>
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
    <div class=" col-12 fuente-institucional texto-azul f-negrita "><h5 class="pb-4 fuente-institucional texto-azul f-negrita">ENLACES DE INTERÉS</h5></div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Correo Aunar</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Sistema Académia</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Icfes</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Eduteka</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Dpto de Ciencia y Tecnología</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Colombia Aprende</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Banco Pichincha</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icfes.png" alt="título imágen"></div><p class="pt-2 mb-0">Comuna</p> </div>
    <div class=" col-lg-2 col-md-3 col-sm-4 col-6 "><div class="p-4"><img class="img-fluid" src="img/icetex.png" alt="título imágen"></div><p class="pt-2 mb-0">Bisel Docentes</p> </div>
    <!-- <div class=" col-lg-1 col-md-2 col-sm-4 col-6 "><div class="circulo p-3"><i class="fa fa-graduation-cap sombra-iconos">      </i></div><p class="pt-2 mb-0">Bisel Estudiantes</p> </div>
    <div class=" col-lg-1 col-md-2 col-sm-4 col-6 "><div class="circulo p-3"><i class="fa fa-leanpub sombra-iconos" >      </i></div><p class="pt-2 mb-0">Publicaciones</p> </div>       
    <div class=" col-lg-1 col-md-2 col-sm-4 col-6 "><div class="circulo p-3"><i class="fa fa-book sombra-iconos" >       </i></div><p class="pt-2 mb-0">Biblíoteca</p> </div>        -->
  </div>
</div>
<!-- -----------------FIN ENLACES DE INTERES------------------------- -->


	
<!-- ----------------PIE DE PÁGINA---------------------------- -->
	<footer class="fondo-azul">
		<div class="container-fluid">
      <div class="container p-5 ">
        
              <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 ">
                  <label class=" texto-amarillo fuente-institucional f-x-small f-negrita" >NORMATIVIDAD INSTITUCIONAL</label>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Estatuto general</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Reglamento docentes</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Reglamento estudiantes</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Reglamento de trabajos de grado</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Reglamento pecuniarios</div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                  <label class=" texto-amarillo fuente-institucional f-x-small f-negrita" >PROGRAMAS ACADÉMICOS</label>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Por facultades</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Programas</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Modalidades</div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                  <label class=" texto-amarillo fuente-institucional f-x-small f-negrita" >PLANEACIÓN</label>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Sistema de Gestión de calidad</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small">Proyectos</div>
                  
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                  <label class=" texto-amarillo fuente-institucional f-x-small f-negrita" >TALENTO HUMANO</label>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Seguridad y salud en el trabajo</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Capacitaciones</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Pausas activas</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Deporte y cultura</div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                  <label class=" texto-amarillo fuente-institucional f-x-small f-negrita" >FORMATOS INSTITUCIONALES</label>                  
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Hoja de vida docentes</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Hoja de vida administrativos</div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2">
                  <label class=" texto-amarillo fuente-institucional f-x-small f-negrita" >FORMATOS INSTITUCIONALES</label>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Hoja de vida docentes</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Hoja de vida administrativos</div>
                  <div class="mb-1 text-light fuente-institucional f-x-small ">Actualización de formatos organigrama</div>
                </div>                
                
              </div>
      </div>
		</div>

<!-- -------------------FIN PIE DE PÁGINA--------------------- -->


<!-- línea separadora amarilla -->
<hr width="90%" class="linea-footer2"></hr>



<!-- -------------------FOOTER CONTACTOS---------------------- -->
<div class="container-fluid fondo-azul-oscuro">
  <div class="row p-3">  
    <div class="col-lg-6 mt-3 text-right text-light">
      <div class="row">
        <div class="col-8"></div>
        <div class="col-4"><img class="img-fluid" src="img/aunar-logo.svg" alt="Logo AUNAR Autónoma de Nariño"></div>
      </div>
    </div>
    <div class="col-lg-6 mt-3 text-light  f-x-small fuente-institucional">
      <div>Corporación Universitaria Autónoma de Nariño </div>
      <div>Carrera 28 No. 19-24 </div>
      <div>Tel. 729 05 08 - 723 24 52 - 722 60 20</div>
      <div>Pasto(Nariño) Colombia</div>
    </div>
    <div class="col-lg-12 mt-3 text-center text-light fuente-institucional f-x-small">
    <div class="div f-negrita">"INSTITUCIÓN DE EDUCACIÓN SUPERIOR SUJETA A INSPECCÍÓN Y VIGILANCIA POR EL MINISTERIO DE EDUCACIÓN NACIONAL"</div>
    <div class="div">Personería Jurídica No. 1054 del 1 de Febrero de 1983 - ©Copyright 2017 - Derechos Reservados</div>
    
    </div>

  </div>
</div>
<!-- -------------------FIN FOOTER CONTACTOS------------------ -->

</footer>


</body>
</html>

