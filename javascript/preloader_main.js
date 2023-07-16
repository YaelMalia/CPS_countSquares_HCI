
window.onload = function(){
    cargarPre();
    setTimeout(ocultarPre, 2001);
    setTimeout(mostrarInstrucciones, 3000);
}

function cargarPre(){
    document.getElementById("header").style.display = "none";
    // document.getElementById("juego").style.display = "none";
    document.getElementById("textoInf").style.display = "none";
    document.getElementById("carrusel").style.display = "none";
    document.getElementById("G").style.display = "none";
}

function ocultarPre(){
    $("#preloader").fadeOut(250);
    $("#header").fadeIn(650);
    // $("#juego").fadeIn(650);
    $("#textoInf").fadeIn(650);
   
}

function mostrarInstrucciones(){
    $("#carrusel").slideDown(950);
    $("#G").slideDown(950);
}