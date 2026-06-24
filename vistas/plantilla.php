<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
    <?php 
        include "modulos/encabezado.php";
        include "modulos/menu.php";


        if (isset($_GET["ruta"])){

        // echo $_GET["ruta"];
        // exit();

            if(
                $_GET["ruta"]=="contacto" ||
                $_GET["ruta"]=="inicio" ||
                $_GET["ruta"]=="gestion_usuarios" ||
                $_GET["ruta"]=="roles_permisos" ||
                $_GET["ruta"]=="dependencias" ||
                $_GET["ruta"]=="radicacion" ||
                $_GET["ruta"]=="consulta_seguimiento" ||
                $_GET["ruta"]=="series_documentales" ||
                $_GET["ruta"]=="subseries_documentales" ||
                $_GET["ruta"]=="gestion_tramites" ||
                $_GET["ruta"]=="reportes"

            ){
                include "modulos/".$_GET["ruta"].".php";
            }//fin de la lista blanca
            else{
                include "modulos/error404.php";
            }

        } //fin de la captura de la variable ruta
       
        include "modulos/footer.php";
    
    ?>



</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="vistas/dist/js/demo.js"></script> -->
</body>
</html>
