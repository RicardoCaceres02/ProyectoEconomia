
<?php 
 session_start();
       $idPropiedad = $_POST['form_id'];
       $idUto=$_POST['opcion'];
       $Precio=$_POST['Precio'];
       $_SESSION['idPropiedad'] = $idPropiedad;
       $_SESSION['idUto'] = $idUto;
       $_SESSION['Precio'] = $Precio;
       header('Location: Fechas.php');
      
?>
 