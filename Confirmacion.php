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
    
    <?php 
    session_start();
    
        $conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com",
         "hthadmin", "EconomiaDigi21", "HtHbase");
         $Fechainicial= $_SESSION['Fechainicial'];
         $FechaFinal= $_SESSION['FechaFinal'];
         $idUto = $_SESSION['idUto'];
         $Precio= $_SESSION ['Precio'];

        $sql = " SELECT costo FROM  automovil where idAuto=$idUto";
        $resultado = mysqli_query($conn, $sql);
        $fila = mysqli_fetch_assoc($resultado);
       
        $fecha1 = new DateTime($_SESSION['Fechainicial']);
        $fecha2 = new DateTime($_SESSION['FechaFinal']);

        $dias = $fecha1->diff($fecha2);
        $_SESSION['dias'] = intval($dias->days);
        

        $Total = (intval($Precio) * intval($dias->days))+(intval($fila['costo']) * intval($dias->days));
        $_SESSION['CostoAu']=intval($fila['costo']);
        $_SESSION['Total'] = $Total;
        mysqli_close($conn);  
         ?>
            
  
     <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
               
                <h1 class="display-5 mb-5">Confirmar Datos</h1>
            </div>
            <form action="MetodoPago.php" method="post">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="bg-light rounded p-4 p-sm-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-3">
                            <div class="col-sm-6">
                                <div >
                                <h4>
                                    <label for="gname" class="form-control border-0">
                                    <h5>
                                        Precio por dia L.
                                         <?php  echo $Precio; ?>
                                         </h5>
                                        </label>
                                        
                                </div>
                                
                            </div>
                            <div class="col-sm-6">
                                <div >
                               
                                     <label for="gname" class="form-control border-0">
                                         
                                     <h5>
                                        Costo del vehiculo L.
                                        <?php  
                                        
                                        echo $fila['costo'] ; ?>
                                    </label>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div >
                            
                                     <label for="gname" class="form-control border-0">
                                     <h5>
                                        Fecha de incio 
                                        <?php  echo $Fechainicial; ?>
                                    </label>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                              
                                 <label for="gname" class="form-control border-0">
                                 <h5>
                                       Fecha de Fin 
                                        <?php  echo $FechaFinal; ?>
                                    </label>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                              
                                 <label for="gname" class="form-control border-0">
                                 <h5>
                                       Cantidad de dias  
                                        <?php  
                                        echo $dias->days ;
                                         ?>
                                    </label>
                                    </h5>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div>
                              
                                 <label for="gname" class="form-control border-0">
                                 <h5>
                                       Total a pagar L. 
                                        <?php     echo $Total; ?>
                                    </label>
                                    </h5>
                                </div>
                            </div>
                           
                            <div class="col-12 text-center">
                                <button class="btn btn-primary py-3 px-4" type="submit">Siguiente</button>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </form>
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