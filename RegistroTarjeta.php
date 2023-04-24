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
    <!-- Navbar End -->



     <!-- Contact Start -->
        <div class="container" style="width: 100%;">
            
       
                <div style="width: 50%;display: inline-block; height: 100%; border-color: black;" >
                    <p class="fs-5 fw-bold text-primary" style="margin-left: 200px;">Registro De tarjeta</p>
                    <form method="post" action="RegistroTar.php" >
                    <div class="form-floating">
                         <p class="fs-5 fw-bold text-primary">Numero de Tarjeta</p>
                        <input type="text" id="username" class="fadeIn second" name="Ntarje" placeholder="0000-0000-0000-0000" Maxlength="16" require>
                        <p class="fs-5 fw-bold text-primary">Fecha de vigencia</p>
                        <input type="text" id="username" class="fadeIn second" name="Vigencia" placeholder="00/00" pattern="[0-9]{2}/[0-9]{2}$" require> 
                        <p class="fs-5 fw-bold text-primary">cvv</p>
                        <input type="text" id="username" class="fadeIn second" name="cvv" placeholder="cvv" maxlength="3" require>
                        
                        
                            <button class="btn btn-primary py-3 px-4" type="submit" style="margin-left: 200px;">Registrar</button>    
                                </div>
                        
                      </form>
                      
                </div>
                     
                
              
        
            </div>
     
        
           
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
       
    <!-- Footer End -->
</div>
     

    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


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