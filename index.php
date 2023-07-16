<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/index-styles.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="alertify/alertify.css">
    <!-- Fin CSS -->

    <!-- JS -->
    <script src="javascript/preloader.js"></script>
    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="javascript/jquery.js"></script>
    <script src="alertify/alertify.js"></script>
    <!-- Fin JS -->
    <title>Inicio jugador</title>
</head>

<header id="header" class="header">
    <div class = "logo1"><img class = "lg1" src="sources/images/tecnm.png" width="190" height="95"></div>
    <div class = "logo2"><img class = "lg2" src="sources/images/itesa.png" width="200" height="95"></div>
    <div class = "logo3"><img class = "lg3" src="sources/images/ISC.png" width="210" height="80"></div>
</header>
<br>
<div id="textoInf" style="text-align:center;"><h2><b>Cuenta cuadros</b></h2></div>
<!-- Preloader  -->
<div id="preloader" class="preloader">
    <div class="loadingio-spinner-chunk-x3jjkz06lah"><div class="ldio-c5722fmtqte">
            <div><div><div></div><div></div><div></div><div></div></div></div>
            </div></div>
            <br>Cuenta cuadros - ITESA
    </div>
    <!-- Fin preloader -->
<body>
    <div id="b">
        <!-- <form action="#" method="post"> -->
            <label><h2>Nombre del jugador</h2></label><br>
                <input type="text" name="PlayerName" id="PlayerName">
            <br><br>
            <label ><h2>Edad del jugador</h2></label><br>
                <input type="number" name="PlayerAge" id="PlayerAge">
            <br><br>
                <button id="Play">Jugar</button>
                <br><br>
            <a href="Login.php"><h5>Soy administrador - Iniciar sesión</h5></a>
        <!-- </form> -->
    </div>

    <script type="text/javascript">
        var Name;
        var Age;
        var SchoolarLvl = "";
        var Grade = "";
        $("#Play").click(function(){
            Name = document.getElementById("PlayerName").value;
            Age = document.getElementById("PlayerAge").value;
            if((Name.is_null || Name == "")){
                window.alert("Nombre del jugador no especificado");
            }else{
                if((Age.is_null)){
                    window.alert("Edad del jugador está vacía o es inválida");
                }else if(Age.includes('.')){
                    window.alert("Edad del jugador es inválida");
                }else{
                    // Cálculo de nivel educativo
                    if(Age >=6 && Age <=16){
                        
                        if(Age>=6 && Age<13){
                            SchoolarLvl = "Primaria";
                        }
                        if(Age>=12 && Age<=16){
                            SchoolarLvl = "Secundaria";
                        }
                        // Grado escolar
                    var CG;
                    if(SchoolarLvl == "Primaria"){
                        CG = Age-5;
                        if(CG > 6){
                            CG-=1;
                        }
                    }else{
                        if(Age == 12){
                            CG = 1;
                        }else if(Age == 13 || Age == 14){
                            CG = 2;
                        }else{
                            CG = 3;
                        }
                    }

                    alertify.alert("Grado escolar", "Según la edad ingresada, el nivel escolar calculado es: " + SchoolarLvl + ", año: " + CG);
                    //history.pushState('',{GEsc:SchoolarLvl, AnioEsc:CG},'http://localhost/CuentaCuadros/main.php?' + 'GEsc='+SchoolarLvl+'&'+'AnioEsc='+String(CG));
                    window.alert("Usted va a ser redirigido en unos instantes, por favor espere.");
                    setTimeout( function() { window.location.href = "main.php"; }, 7000 );

                    }else{
                        alertify.alert("Error", "Edad ingresada no está entre los valores correspondientes para primaria/secundaria");
                    }
                    
                }
            }
        });
    </script>

</body>
<footer>
    <div class="piePagina" id="footer">
        <div class = "sectorI">
            <img class = "isc" src="sources/images/ISC.png" width="210" height="80">
            <br><br><br> Todos los derechos reservados ©
        </div>
        <div class = "sectorD">
            <div class = "P1">
                <img class = "alummnos" src="sources/images/Yael.jpg" width="100" height="100" style="border-radius:50px;">
                <br><br>
                Uri Yael Covarrubias Cruz - Semestre 8
                <br>
                <b>Alumno de ITESA</b>
            </div>
            <div class = "P2">
                <img class = "alummnos" src="sources/images/Vera.jpg" width="100" height="100" style="border-radius:50px;">
                <br><br>
                Josue Vera Aguilar - Semestre 8
                <br>
                <b>Alumno de ITESA</b>
            </div>
        </div>
    </div>
</footer>
</html>