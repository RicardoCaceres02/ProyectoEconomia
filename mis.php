<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>House to Home</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/icon/icon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->




    <!-- Navbar Start -->
    
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="Menu.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">House to Home</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="Menu.php" class="nav-item nav-link active">Inicio</a>
                <a href="alquileres.php" class="nav-item nav-link">Alquileres</a>
                <a href="mis.php" class="nav-item nav-link">Mis Reservaciones</a>
            </div>
            <a href="cerrarse.php" class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block">
                Cerrar Sesion<i class="fa fa-arrow-right ms-3">
                
                </i></a>
        </div>
    </nav>
    
   
            
  
     <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s">
               
                <h1 class="display-5 mb-5">Mis Recervaciones</h1>
                <h1 class="display-5 mb-5"></h1>
            </div>
            
             
      
        
        <div id="contenido"style="background-color: white;">
         <table style="margin: auto; width: 30px; border-collapse: separate; border-spacing: 60px 10px;">
  		        <thead>
  			<th>IdRecevacion</th>
  			<th>Id Cliente</th>
              <th>Dias recervados</th>
              <th>fecha Inicio</th>
              <th>Fecha Finalizacion</th>
              <th>Id Propiedad</th>
              <th>Id Auto</th>
              <th>Total</th>
  			<th></th>
  		</thead>
        <?php 
           
   
        $conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com",
         "hthadmin", "EconomiaDigi21", "HtHbase");
         session_start();

         $username= $_SESSION ['username'];

         $sql = " SELECT  customer_id FROM  Clientes where customer_username='$username'";
         $resultado = mysqli_query($conn, $sql);
         $fila = mysqli_fetch_assoc($resultado);
         $idusuario=intval($fila['customer_id']);

        
         
        $sql1 = " SELECT  * FROM  reservaciones where Idcliente= '$idusuario'";
        $resultado1 = mysqli_query($conn, $sql1);


        
        while ($filas = mysqli_fetch_assoc($resultado1)) {
        echo "<tr>";
        echo "<td>" . $filas["idReservacion"] . "</td>";
        echo "<td>" . $filas["Idcliente"] . "</td>";
        echo "<td>" . $filas["numDias"] . "</td>";
        echo "<td>" . $filas["fechaIngreso"] . "</td>";
        echo "<td>" . $filas["fechaSalida"] . "</td>";
        echo "<td>" . $filas["idPropiedad"] . "</td>";
        echo "<td>" . $filas["idAuto"] . "</td>";
        echo "<td>" . $filas["total"] . "</td>";
        
            echo "</tr>";
            }
           
            
         ?>
         </table>
  </div>        
                                    
                                         
                                     
                                     
                                    
       
        
        
   


    

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>