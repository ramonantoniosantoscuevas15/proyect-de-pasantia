<?php


$nombre=$_POST['nombre'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['nombre']=$nombre;

$conexion=mysqli_connect("localhost", "id17960999_pasantes_alpha", "W#~fUq9]sQ0kLo[#", "id17960999_pasantes_alpha_db");

$consulta="select * from  login where nombre ='$nombre' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['id_cargo']==1){ //administrador
    echo'<script type="text/javascript">
    alert("Ha iniciado seccion en el sitio de administracion");
    window.location.href="../admin/pasantes activos.php"
    </script>';
    
   

}else if($filas['id_cargo']==2){ //pasantes
    echo'<script type="text/javascript">
    alert("Ha iniciado seccion en el citio de pasantes");
    window.location.href="../pasantes/pasantes.php"
    </script>';

}
else{
      echo'<script type="text/javascript">
    alert("El nombre de usuario o la contraseña es erronea. Por favor revise e intente de nuevo.");
    window.location.href="../logins/login.html"
    </script>';


}

mysqli_free_result($resultado); 
mysqli_close($conexion);
