    /* activar tooltip para redes sociales cuando se ponga el mouse encima*/    
    $(document).ready(function(){
      $('[data-toggle="tooltip"]').tooltip();   
    });


    // Sript para el efecto del logo con el scroll cuando baje se haga mas pequeño y cuando este en la posición inicial el logo este normal
    $(window).scroll(function() {
        if ($("#cont-logo").offset().top > 56) {
            $("#cont-logo").addClass("col-lg-1 pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-3 pr-lg-3  efecto-antes");            
            $("#cont-logo").removeClass("col-lg-2 pl-lg-4 pr-lg-4 pb-lg-4 ");//el logo inicia en tamaaño p-lrb-4 pero si baja se le quita una columna si sube se aumenta una

            // para arreglar el traductor
            $("#navbar1").removeClass("mt-5");
        } else {          
            $("#cont-logo").removeClass("pl-3 pr-3 pl-sm-4 pr-sm-4  pl-md-4  pr-md-4  pl-lg-3 pr-lg-3  efecto-despues");
            $("#cont-logo").addClass("col-lg-1  "); //si el logo baja se lo hace mas pequeño de  col-lg-2 aaa col-lg-1 con addclass y remove class
            // para arreglar el traductor            
            $("#navbar1").addClass("mt-0");            
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
     
     // 
    $(document).ready(function(){
       // verifica si existe una sesión, si no existe abre el modal 
      
      // sessionStorage.getItem('key');
      if (sessionStorage.getItem("story") !== 'true') 
      { // sessionStorage.setItem('key', 'value'); pair
        sessionStorage.setItem("story", "true");
        // Calling the bootstrap modal
        $("#myModal").modal();
       }      
      
      // sirve para crear un boton con id reset-session y destruir la sesion o se podria colocar por horas , 
      // es decir si pasa una hora se destruye la sesion y se muestra el modal      
      $('#reset-session').on('click',function()
      {
        sessionStorage.setItem('story','');
      });
    });


    // cuando se haga click en el cuadro de traducción
    $(document).ready(function () 
    {
       $('#google_translate_element').click(function () 
       {    
            $("#navbar1").addClass("mt-5"); 
            // regresa al estado normal en la función del scroll $("#navbar1").removeClass("mt-5"); $("#navbar1").addClass("mt-0"); en
       });        

    });

    


    