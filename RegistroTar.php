<?php
   session_start();
	$conn = mysqli_connect("hthbase.cqk4mgjj5s4t.us-east-1.rds.amazonaws.com", "hthadmin", "EconomiaDigi21", "HtHbase");
    $username= $_SESSION ['username'];
    $Ntarje=$_POST["Ntarje"];
    $Vigencia=$_POST["Vigencia"];
    $cvv=$_POST["cvv"];

    $sql = " SELECT  customer_id FROM  Clientes where customer_username='$username'";
    $resultado = mysqli_query($conn, $sql);
    $fila = mysqli_fetch_assoc($resultado);
    $idusuario=intval($fila['customer_id']);

   
   

    
 $sentencia="INSERT INTO tarjeta (numTarjeta, vigencia, cvv,saldo,Idcliente) 
    VALUES ('$Ntarje', '$Vigencia', '$cvv',FLOOR(RAND() * (15000 - 5000 + 1) + 5000),'$idusuario')";
		
        
       if (mysqli_query($conn, $sentencia)) {
            header('Location: MetodoPago.php');
        } else {
            echo "Error al insertar registro: " . mysqli_error($conn);
        }
       
?>
