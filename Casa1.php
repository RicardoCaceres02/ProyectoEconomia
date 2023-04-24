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
    <!-- Navbar End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-3 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" data-wow-delay="0.1s" src="img/casa1.jpg">
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s" style="margin-left: 160px;" >
                    <h1 class="display-1 text-primary mb-0">L.600</h1>
                    <p class="text-primary mb-4">Precio Por Dia</p>
                    <h1 class="display-5 mb-4">Creamos un ambiente acogedor que transforma tu estadía</h1>
                    <p class="mb-4">Transformamos tu experiencia en algo más que una simple estadía, creando un ambiente acogedor que te hará sentir como en casa.</p>
                    
                </div>
               
            </div>
        </div>
        
        
            <div   class="container-xxl py-5" >
                <div class="container">
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        
                        <h1 class="display-5 mb-5">Galeria de Autos</h1>
                    </div>
                    
                    <div class="row g-4 portfolio-container">
                        <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                            <div class="portfolio-inner rounded">
                                <img class="img-fluid" src="img/carro1.jpg" alt=""style="height: 400px;">
                                <div class="portfolio-text">
                                    <h4 class="text-white mb-4">L.350</h4>
                                    <div class="d-flex">
                                        <a class="btn btn-lg-square rounded-circle mx-2" href="img/carro1.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                            <div class="portfolio-inner rounded">
                                <img class="img-fluid" src="img/carro2.jpg" alt="" style="height: 400px;">
                                <div class="portfolio-text">
                                    <h4 class="text-white mb-4">L.500</h4>
                                    <div class="d-flex">
                                        <a class="btn btn-lg-square rounded-circle mx-2" href="img/carro2.jpg" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                            <div class="portfolio-inner rounded">
                                <img class="img-fluid" src="img/carro3.jpg" alt=""style="height: 400px;">
                                <div class="portfolio-text">
                                    <h4 class="text-white mb-4">L.400
                                        
                                    </h4>
                                    <div class="d-flex">
                                        <a class="btn btn-lg-square rounded-circle mx-2" href="img/carro3.jpg" data-lightbox="portfolio" ><i class="fa fa-eye" ></i></a>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            
            <form action="casas.php" method="POST" name="Casa">
                <input type="hidden" name="form_id" value="1">
                <input type="hidden" name="Precio"   value="600">
                <div class="container-xxl py-5" style="margin-left: 300px;">
                <input type="radio" name="opcion" value="1"> 
                <input type="radio" name="opcion" value="3" > 
                <input type="radio" name="opcion" value="2" > 
            </div>
                <input type="submit" value="Alquilar"class="btn btn-primary py-4 px-lg-4 rounded-0 d-none d-lg-block" style="height: 100px;margin:auto; display:block; width:150px;">
              </form>
              

      
        
   


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
       
    <!-- Footer End -->


    


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