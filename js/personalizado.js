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

    //funcion cuando el mouse pase sobre el menu, se desplñegue
     $(document).ready(function () 
    {
       $('.dropdown-toggle').mouseenter(function () 
       {
          $(this).dropdown("toggle");
       });
    });