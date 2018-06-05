$(function( $ ){

// $('.rotacion').smoove({
// rotate:'360deg',
// move:'-50px,100px',
// scaleX:'4',
// scale3d:'2,4,0.5',
// });

$('.abajo_arriba_derecha').smoove({
moveX:'-250px',
moveY:'350px',
moveZ:'250px'
});

$('.abajo_arriba_izquierda').smoove({
moveX:'250px',
moveY:'350px',
moveZ:'250px'
});

$('.izquierda_derecha').smoove({
moveX:'-270px',
});

$('.derecha_izquierda').smoove({
moveX:'270px',
});


$('.e_arriba_abajo').smoove({
moveY:'-450px',
});


$('.e_abajo_arriba').smoove({
moveY:'450px',
});

$('.e_noticias').smoove({
moveY:'350px',
});

$('.e_rotacion').smoove({
rotate:'10deg',
});

$('.e_escala').smoove({
scale3d:'2,2,0.5',
});

});