<!-- modal para mostrar el video institucional -->




<!-- --------------------MODAL con formulario----------------------- -->
<!-- The Modal -->
  <div class="modal fade" id="modalVideoDerechos">
    <div class="modal-dialog modal-md modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        
          
        
        
        <!-- Modal body -->
        <div class="modal-body fondo-gris-c">
          <button type="button" class="close bg-warning text-white f-negrita" data-dismiss="modal" data-toggle="tooltip" data-placement="left" title="Cerrar">X</button>

          <!-- ---------- -->
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/2jBwFrTNmUs?rel=0" allowfullscreen></iframe>
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

<!-- script - para el video despues que el modal se aya cerrado -->

<script>
    $("#modalVideoDerechos").on('hidden.bs.modal', function (e) {
        $("#modalVideoDerechos iframe").attr("src", $("#modalVideoDerechos iframe").attr("src"));
    });
</script>   