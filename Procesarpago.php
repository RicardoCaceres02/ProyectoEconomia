
<?php 
     session_start();
        $conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com",
         "hthadmin", "EconomiaDigi21", "HtHbase");
         $Total= $_SESSION ['Total'];
         $dias= $_SESSION ['dias'];
         $Fechainicial= $_SESSION['Fechainicial'];
         $FechaFinal= $_SESSION['FechaFinal'];
         $idUto= $_SESSION ['idUto'];
         $idPropiedad= $_SESSION ['idPropiedad'];
         $idusuario= $_SESSION ['idusuario'];

         $saldo = $_GET['saldo'];

         if ($saldo - $Total <= 0) {
            header('Location: Pinsuficiente.php');
          } else {
            $sentencia="INSERT INTO reservaciones (Idcliente, numDias, fechaIngreso, fechaSalida, idPropiedad, idAuto, total) 
            VALUES ('$idusuario', '$dias', '$Fechainicial', '$FechaFinal', '$idPropiedad', '$idUto', '$Total')";
            if (mysqli_query($conn, $sentencia)) {
                header('Location: mis.php');
            } else {
                echo "Error al insertar registro: " . mysqli_error($conn);
            }
        
          }
           
            
         ?>