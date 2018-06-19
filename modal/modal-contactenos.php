<!-- boton fijo para desplegar el modal que conteiene el formulario de contactenos -->


<!-- ------------------BOTON FIJO AYUDA------------------------- -->


    <div class="contenedor-ayuda ">
      <div class="ico-ayuda">       
        <div class="sombra-iconos icono-blanco " data-toggle="modal"   data-target="#myModalContactenos">
          <i class="fa fa-envelope " data-toggle="tooltip" data-placement="right" title="¿Necesitas ayuda?, haz click"></i>
        </div>
      </div>
    </div>


<!-- ------------------FIN BOTON FIJO AYUDA--------------------- -->



<!-- --------------------MODAL con formulario----------------------- -->
<!-- The Modal -->
  <div class="modal fade" id="myModalContactenos">
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        
          
        
        
        <!-- Modal body -->
        <div class="modal-body fondo-gris-c">
          <button type="button" class="close bg-warning text-white f-negrita" data-dismiss="modal" data-toggle="tooltip" data-placement="left" title="Cerrar">X</button>

          <!-- ---------- -->
          <div class="container-fluid bg-white">
            <div class="row">
              
              <div class="col-12 p-2 m-1 ">
                <div class="row">

                  <div class="col-12 p-2 text-center"><img class="img-fluid rounded-circle " src="img/aunar.jpg" width="50%"></div>
                  <div class="col-12 p-2 text-justify pt-sans texto-azul">Si deseas hacer parte de nuestra institución, enviarnos un comentario o conocernos más, escríbenos:</div>
                </div>
              </div>
              
                <div class="col-12 p-1  ">                  
                    <input type="text" class="form-control pt-sans" id="nombre" placeholder="Escribe tu nombre aquí">
                </div>
                <div class="col-12 p-1  ">
                    <input type="email" class="form-control pt-sans" id="correo" placeholder="Escribe tu correo aquí">
                </div>
                <div class="col-12 p-1  ">
                    <input type="number" class="form-control pt-sans" id="celular" placeholder="Escribe tu teléfono aquí">
                </div>
                <div class="col-12 p-1  ">
                  <textarea class="form-control pt-sans" rows="2" id="comment" placeholder="Escríbenos tu mensaje"></textarea></div>
                <div class="col-12 p-1  ">
                  <button type="button" class="btn fondo-amarillo btn-block text-white pt-sans f-negrita">ENVIAR</button>
                
                </div>
              
            </div>
          </div>

          <div class="container-fluid bg-white mt-1 p-1 bg-danger text-center pt-sans texto-azul">
            <p>Información de Contacto<br><label class="f-negrita">mercadeo@aunar.edu.co</label></p>            
            <p>Horario de Atención<br>Lunes a Viernes:<br>8:00 am  a  12:00 pm <br>2:00 am  a   6:00  pm </p>
            
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