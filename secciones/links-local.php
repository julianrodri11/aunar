<meta charset="UTF-8">
<!-- ICONO DE LA PAGINA -->
<link rel="shortcut icon" href="img/aunar.ico">
<!--VIEWPORT SIRVE PARA IDENTIFICAR EL ANCHO DE LAS PANTALLAS-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- iconos externos de awesome -->  
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jQuery library -->
<script async type="text/javascript" src="js/jquery.min.js"></script>
<!-- Popper JS -->
<script async type="text/javascript" src="js/popper.min.js"></script>
<!-- Latest compiled JavaScript -->


<!-- CSS OPTIMIZADO PARA GOOGLE -->
<noscript id="deferred-styles">
<!-- ESTILOS PERSONALES -->
    <link rel="stylesheet" type="text/css" href="css/personalizado.css">
    <!-- efectos cuando se colocal el mouse encima de algo -efectos hover -->
    <link rel="stylesheet" type="text/css" href="css/hover.css">
    <!-- libreria para animaciones del hover de una imágen -->  
    <link rel="stylesheet" type="text/css" href="css/animate.css">
</noscript>

<script>
      var loadDeferredStyles = function() {
        var addStylesNode = document.getElementById("deferred-styles");
        var replacement = document.createElement("div");
        replacement.innerHTML = addStylesNode.textContent;
        document.body.appendChild(replacement)
        addStylesNode.parentElement.removeChild(addStylesNode);
      };
      var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
          window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
      if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
      else window.addEventListener('load', loadDeferredStyles);
</script>
<!-- FIN CSS OPTIMIZADO PARA GOOGLE -->


<!-- framework para maquetación  -->
<script async type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- para activar complementos de bootstrar o hacer otras acciones  -->
<script async type="text/javascript" src="js/personalizado.js"></script>
<!-- efectos cuando se baje el scroll -->
<script async type="text/javascript" src="js/jquery.smoove.min.js"></script>
<!-- efectos personalizados -->
<script async type="text/javascript" src="js/efectos_smoove.js"></script>

<?php /*VARIABLE QUE SACA EL NOMBRE DEL SERVIDOR*/ $servidor = $_SERVER['SERVER_NAME']; ?>