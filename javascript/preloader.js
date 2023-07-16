window.onload = function(){
    cargarPre();
    setTimeout(ocultarPre, 2001);
}

function cargarPre(){
    document.getElementById("header").style.display = "none";
    document.getElementById("b").style.display = "none";
    document.getElementById("textoInf").style.display = "none";
    document.getElementById("footer").style.display = "none";
}

function ocultarPre(){
    $("#preloader").fadeOut(250);
    $("#header").fadeIn(650);
    $("#textoInf").fadeIn(750);
    $("#b").fadeIn(950);
    $("#footer").fadeIn(1050);
    document.getElementById("header").style.display = "flex";
    // document.getElementById("b").style.display = "block";
}
