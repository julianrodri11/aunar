$(function( $ ){

// $('.rotacion').smoove({
// rotate:'360deg',
// move:'-50px,100px',
// scaleX:'4',
// scale3d:'2,4,0.5',
// });

$('.abajo_arriba_derecha').smoove({
moveX:'-350px',
moveY:'150px',
moveZ:'350px'
});

$('.abajo_arriba_izquierda').smoove({
moveX:'350px',
moveY:'150px',
moveZ:'350px'
});

$('.izquierda_derecha').smoove({
moveX:'-400px',
});

$('.derecha_izquierda').smoove({
moveX:'400px',
});


$('.e_arriba_abajo').smoove({
moveY:'300px',
});


$('.e_abajo_arriba').smoove({
moveY:'-300px',
});

$('.e_noticias').smoove({
moveY:'300px',
});

});