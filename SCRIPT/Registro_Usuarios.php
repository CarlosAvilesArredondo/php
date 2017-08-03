<?php
session_start();
include "conexion.php";
//$link=conectarse(); //invoca la funcion


if (isset($_POST['Registro'])){
	       $nombre=$_POST['txtNombreU'];   //nombre usuario de formulario registar
	     $password=$_POST['txtPassword2'];
	 $confirmapass=$_POST['txtConfirmaP'];
	        $email=$_POST['txtEmail2'];


	//validamos que no se dejeN espacios
	//en blanco en el FORMULARIO
	if($_POST['txtNombreU']== NULL ||
	 $_POST['txtPassword2']== NULL ||
       $_POST ['txtConfirmaP']==NULL  || 
         $_POST ['txtEmail2']==NULL )
{
	//mesaje que se invoca en el explorador 
	  echo '<script language=javascript>
	  alert ("ERROR : NO DEBES DEJAR ESPACIOS EN BLANCO")
	  self.location="../Registro_Usuarios.php";
	  </script>';
}
else
{//inicio else
	if($password==$confirmapass){
		//realizamos la insercion de registros  CAMPOS BASES DE DATOS
		$base="bdweb";
		$conexion=mysqli_connect('localhost','Kim','revick93','dbweb');
		mysqli_select_db($conexion,$base);
		$query_insertar="INSERT INTO usuario(id_usuario,nombre,password,e_mail)
     VALUES (NULL,'".$nombre."','".$password."','".$email."');";
   
   if(mysqli_query($conexion,$query_insertar)) {
//mesaje que se invoca en el explorador 
	  echo '<script language=javascript>
	  alert ("Registro de Usuario con EXITO")
	  self.location="../index.php";
	  </script>';
}

else
	{
		 echo '<script language=javascript>
	  alert ("Registro de usuario no registrado ....")
	  self.location="../Registro_Usuarios.php";
	  </script>';
	}//FIN ELSE
	  //cerrar conexion solo se cieera cuando inserta
	  mysqli_close($conexion);
	}//fin if
	else{

		 echo '<script language=javascript>
	  alert ("Las contraseñas no coinciden ....")
	  self.location="../Registro_Usuarios.php";
	  </script>';
	}//FIN ELSE

}
}
if (isset($_POST['Entrar'])){
	//consulta de ver si existe o no el ususario
	$nombre=$_POST['txtUsuario'];
	$password=$_POST['txtPassword'];

	if($nombre==NULL or $password==NULL)
	{//inicio if
		 echo '<script language=javascript>
	  alert ("Faltan datos por llenar en el formulario ....")
	  self.location="../Inicia_Sesion.php"
	  </script>';
	}//fin if
	else
	{//inicio else realizar la consulta a la base de datos de la tabla usuarios
		
		$conexion=mysqli_connect('localhost','Kim','revick93','dbweb');
	$QUERY=mysqli_query($conexion,"SELECT * FROM usuario WHERE nombre='$nombre' AND password='$password'");
    $RT=mysqli_affected_rows($conexion);
    
    if($RT>0){
    	$row=mysqli_fetch_array($QUERY);
    	$_SESSION['usuario']=$row['nombre'];

    	echo '<script language=javascript>
	         alert ("Iniciando Sesion para ....'.$_SESSION ['usuario'].'")
	         self.location="../productos.php"
	         </script>';
    }//fin IF
    else
    {
        echo '<script language=javascript>
	  alert ("Inicio de Sesion Rechazada ....Aceptar para Registrarse")
	  self.location="../Registro_Usuarios.php"
	  </script>';
    }//fin echo
   }//FIN ELSE IF
  }



?>