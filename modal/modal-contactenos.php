<!-- boton fijo para desplegar el modal que conteiene el formulario de contactenos -->


<!-- ------------------BOTON FIJO AYUDA------------------------- -->


    <div class="contenedor-ayuda ">
      <div class="ico-ayuda  ">       
        <div class="sombra-iconos p-1 icono-blanco  " data-toggle="modal"   data-target="#myModalContactenos">
          <i class="fa fa-question-circle"></i>
        </div>
      </div>
    </div>


<!-- ------------------FIN BOTON FIJO AYUDA--------------------- -->



<!-- --------------------MODAL con formulario----------------------- -->
<!-- The Modal -->
  <div class="modal fade" id="myModalContactenos">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">        
          <button type="button" class="close" data-dismiss="modal">×</button>          
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">

          <!-- ---------- -->
          <div class="container-fluid fondo-gris-c">
            <div class="row">
              <div class="col-12 p-2 m-1 ">
                <div class="row">
                  <div class="col-12 col-lg-4 p-3 text-center"><img class="img-fluid rounded-circle " src="img/aunar.jpg"></div>
                  <div class="col-12 col-lg-7 p-3 text-justify fuente-institucional texto-azul">Si deseas hacer parte de nuestra institución, enviarnos un comentario o conocernos más, escríbenos:</div>
                </div>
              </div>
              
                <div class="col-12 p-2 m-1 ">
                  <form action="#">
                    <input type="text" class="form-control fuente-institucional" id="nombre" placeholder="Escribe tu nombre aquí">
                </div>
                <div class="col-12 p-2 m-1 ">
                    <input type="email" class="form-control fuente-institucional" id="correo" placeholder="Escribe tu correo aquí">
                </div>
                <div class="col-12 p-2 m-1 ">
                    <input type="number" class="form-control fuente-institucional" id="celular" placeholder="Escribe tu teléfono aquí">
                </div>
                <div class="col-12 p-2 m-1 ">
                  <textarea class="form-control fuente-institucional" rows="5" id="comment" placeholder="Escríbenos tu mensaje"></textarea></div>
                <div class="col-12 p-2 m-1 ">
                  <button type="button" class="btn fondo-amarillo btn-block text-white fuente-institucional f-negrita">ENVIAR</button>
                </form>
              </div>
              
            </div>
          </div>

 

          <!-- ----------- -->

        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">          
          <button type="button" class="btn fondo-azul-oscuro text-white" data-dismiss="modal">Cerrar</button>
        </div>
        
      </div>
    </div>
  </div>
<!-- -------------------FIN MODAL INICIAL-------------------- -->