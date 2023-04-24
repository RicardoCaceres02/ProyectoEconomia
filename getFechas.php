<?php 
 session_start();
       $Fechainicial = $_POST['Fechainicial'];
       $FechaFinal=$_POST['FechaFinal'];
       $_SESSION['Fechainicial'] = $Fechainicial;
       $_SESSION['FechaFinal'] = $FechaFinal;
       header('Location: Confirmacion.php');
?>
 