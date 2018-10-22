<meta charset="UTF-8">
<link rel="shortcut icon" href="img/aunar.ico">
<meta name="viewport" content="width=device-width, initial-scale=1">
<noscript id="deferred-styles">
<link rel="stylesheet" type="text/css" href="css/personalizado.css">
<link rel="stylesheet" type="text/css" href="css/hover.css">
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
<script  type="text/javascript" src="js/jquery.min.js" async></script>
<script  type="text/javascript" src="js/popper.min.js" async></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script  type="text/javascript" src="js/bootstrap.min.js" async></script>
<script  type="text/javascript" src="js/personalizado.js" async></script>
<script  type="text/javascript" src="js/jquery.smoove.min.js" async></script>
<script  type="text/javascript" src="js/efectos_smoove.js" async></script>
<?php /*VARIABLE QUE SACA EL NOMBRE DEL SERVIDOR*/ $servidor = $_SERVER['SERVER_NAME']; ?>