<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista del administrador</title>

     <!-- CSS -->
     <link rel="stylesheet" href="bootstrap/bootstrap-grid.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.css">
    <link rel="stylesheet" href="css/index-styles.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/preloader.css">
    <link rel="stylesheet" href="alertify/alertify.css">
    <!-- Fin CSS -->

    <!-- JS -->
    <script src="javascript/jquery-3.5.1.min.js"></script>
    <script src="javascript/jquery.js"></script>
    <script src="alertify/alertify.js"></script>
    <!-- Fin JS -->


    <style>
        .vistaAdmin{
            box-shadow: 0px 0px 37px -7px rgba(0,0,0,0.56);
            -webkit-box-shadow: 0px 0px 37px -7px rgba(0,0,0,0.56);
            -moz-box-shadow: 0px 0px 37px -7px rgba(0,0,0,0.56);
        }

    </style>

</head>

<header id="header" class="header">
    <div class = "logo1"><img class = "lg1" src="sources/images/tecnm.png" width="190" height="95"></div>
    <div class = "logo2"><img class = "lg2" src="sources/images/itesa.png" width="200" height="95"></div>
    <div class = "logo3"><img class = "lg3" src="sources/images/ISC.png" width="210" height="80"></div>
</header>

<body>
    <h4 style="margin-top:3%;"><b>Vista de administrador - Seguimiento de usuarios</b></h4>
    <div class="vistaAdmin" id="vistaAdmin container-fluid" style="width:80%; height:auto; margin: 0 auto; margin-top:5%; min-width:max-content;">
    <div class="filtros" id="filtros" style="align-text:left;">
        <h5>Filtrar por:</h5>   <h5>Nombre:</h5> <input type="text">
    </div>
    <table class="table">
  <thead class="thead-dark">
      <th scope="col">No.</th>
      <th scope="col">Nombre</th>
      <th scope="col">Edad</th>
      <th scope="col">Modo de juego</th>
      <th scope="col">Correctos</th>
      <th scope="col">Incorrectos</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Uri Yael</td>
      <td>21</td>
      <td>4X4</td>
      <td>26</td>
      <td>5</td>
    </tr>
    <tr>
    <th scope="row">2</th>
      <td>Josue</td>
      <td>21</td>
      <td>4X4</td>
      <td>29</td>
      <td>2</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>Eduardo</td>
      <td>21</td>
      <td>4X4</td>
      <td>20</td>
      <td>11</td>
    </tr>
  </tbody>
</table>

    </div>
    
</body>
</html>