    /* activar tooltip para redes sociales cuando se ponga el mouse encima*/    
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });


    // Sript para el efecto del logo con el scroll cuando baje se haga mas pequeño y cuando este en la posición inicial el logo este normal
    $(window).scroll(function() {
        if ($("#cont-logo").offset().top > 56) {
            $("#cont-logo").addClass("pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-3 pr-lg-3  efecto-antes");            

        } else {          
            $("#cont-logo").removeClass("pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-3 pr-lg-3  efecto-despues");            
        }
      });

    //funcion cuando el mouse pase sobre el menu, se despliegue
     $(document).ready(function () 
    {
       $('.dropdown-toggle').mouseenter(function () 
       {
          $(this).dropdown("toggle");
       });
    });


     // para el modal de inicio
     
     // init
    $(document).ready(function(){
       // verifica si existe una sesión, si no existe abre el modal 
      // Start
      // sessionStorage.getItem('key');
      if (sessionStorage.getItem("story") !== 'true') {
        // sessionStorage.setItem('key', 'value'); pair
        sessionStorage.setItem("story", "true");
        // Calling the bootstrap modal
        $("#myModal").modal();
        }
      // End
      
      // sirve para crear un boton con id reset-session y destruir la sesion o se podria colocar por horas , 
      // es decir si pasa una hora se destruye la sesion y se muestra el modal
      // Do not include the code below, it is just for the 'Reset Session' button in the viewport.
      // This is same as closing the browser tab.
      $('#reset-session').on('click',function(){
      sessionStorage.setItem('story','');
      });
    });