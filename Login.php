<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>

    <!-- CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/index-styles.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="alertify/alertify.css">
    <!-- Fin CSS -->

    <!-- JS -->
    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="javascript/jquery.js"></script>
    <script src="alertify/alertify.js"></script>
    <!-- Fin JS -->

<style>

    .inputText, .botoncito{
        font-size: 30px;
        text-align:center;
        width: 280px;
        height: 60px;
        border-radius: 15px;
        
    }

    .formulario{
        box-shadow: 0px 0px 37px -7px rgba(0,0,0,0.56);
    -webkit-box-shadow: 0px 0px 37px -7px rgba(0,0,0,0.56);
    -moz-box-shadow: 0px 0px 37px -7px rgba(0,0,0,0.56);
    }

    /* MediaQuery Responsive Design */
    @media(max-width:768px){
        h4{
            font-size: large;
        }

        .inputText, .botoncito{
            font-size: 15px;
            width: 220px;
            height: 40px;
        
        }
    }

</style>

</head>

<header id="header" class="header">
    <div class = "logo1"><img class = "lg1" src="sources/images/tecnm.png" width="190" height="95"></div>
    <div class = "logo2"><img class = "lg2" src="sources/images/itesa.png" width="200" height="95"></div>
    <div class = "logo3"><img class = "lg3" src="sources/images/ISC.png" width="210" height="80"></div>
</header>

<body>
<div id="formulario" class="formulario container-fluid" style="margin: 0 auto; background-color:#428D8B; width:45%; height:40%; margin-top:5%; padding-top:30px; padding-bottom:30px; min-width:max-content; border-radius:20px;">
    <center>
    <label><h4><b>Formulario de inicio</b></h4></label>
    <br><br><br><br>
    <label><h4>Nombre del usuario:</h4></label>
    <br>
    <input type="text" name="User" id="User" class = "inputText">
    <br><br><br>
    <label><h4>Contraseña:</h4></label>
    <br>
    <input type="password" name="Pass" id="Pass" class = "inputText">
    <br><br><br>
        <button id="IniciarSesion" class = "botoncito">Iniciar Sesión</button>
    </center>
</div>
</body>
    <script>
        var usuario = "AdminTest";
        var password = "password";
       $("#IniciarSesion").click(function(){
        var usuarioInput = document.getElementById("User").value;
        var passInput = document.getElementById("Pass").value;
        if((usuarioInput.is_null || usuarioInput == "") || (passInput.is_null || passInput == "")){
            alertify.alert("Error", "Usuario o contraseña están vacias, revise los campos");
        }else{
            if((usuarioInput == usuario) && (passInput == password)){
                alertify.alert("Exito", "Bienvenido administrador, será redirigido en unos momentos");
                setTimeout( function() { window.location.href = "AdminView.php"; }, 2500 );
            }else{
                alertify.alert("Error", "Credenciales inválidas, por favor de verificar sus datos");
            }
        }
       });
    </script>

</html>