<?php


if (isset($_POST['Calular_pedido'])) {
    
    
      $nombre=$_POST['txtNombreP'];
     $descripcion=$_POST['txtDescripcion'];
    $precio=$_POST['txtPrecio'];
    $cantidad=$_POST['txtCantidad'];




    if ($cantidad==NULL) {
    	  echo '<script language=javascript>
	  alert ("ERROR : NO DEBES DEJAR ESPACIOS EN BLANCO")
	  self.location="../pedido.php";
	  </script>';
    }
     else{
     	$subtotal=$precio*$cantidad;
     	$iva=$subtotal*0.16;
     	$total=$subtotal+$iva;

     	header("location:../pedido.php?nombre=$nombre&precio=$precio&descripcion=$descripcion&cantidad=$cantidad&Subtotal=$subtotal&Iva=$iva&Total=$total" );

     }
	
}

 if (isset($_POST['Cancelar'])) {
     echo '<script language=javascript>
      alert ("CANCELANDO COMPRA")
      self.location="../Productos.php";
      </script>';

   
   
  }

        if (isset($_POST['Comprar'])){
        
          $nombre=$_POST['txtNombreP'];
         $descripcion=$_POST['txtDescripcion'];
         $precio=$_POST['txtPrecio'];
         $cantidad=$_POST['txtCantidad'];

         $subtotal=$_POST['txtSubtotal'];
        $iva=$_POST['txtIva'];
        $total=$_POST['txtTotal'];



//realizamos la insercion de registros  CAMPOS BASES DE DATOS
    $base="dbweb";
    $conexion=mysqli_connect('localhost','Kim', 'revick93');
    mysqli_select_db($conexion,$base);
    $query_insertar="INSERT INTO pedido(idPedido,NombreP,Descripcion,Precio,Cantidad,Subtotal,Iva,Total)
     VALUES (NULL,'".$nombre."','".$descripcion."','".$precio."','".$cantidad."','".$subtotal."','".$iva."','".$total."');";
   
   mysqli_query($conexion,$query_insertar);


              echo '<script languaje=javascript>
              alert ("Gracias por su Compra ")
              self.location="../cerrar_sesion.php";
               </script>';
    mysql_close($conexion);//cierra conexion
}





?>