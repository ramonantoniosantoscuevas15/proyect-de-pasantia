<?php
ob_start();

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$universidad=$_POST['universidad'];
$telefono=$_POST['telefono'];
$direccion=$_POST['direccion'];
$donde_vives=$_POST['donde_vives'];
$correo=$_POST['correo'];
$campo = array();
if(strlen($cedula)!=11){
    array_push($campo,"la cedula debe tener 11 caracteres");
}
if(strlen($telefono)!=10){
    array_push($campo,"el telefono debe tener 10 caracteres");
}
if(count($campo)>0){
    echo"<div class='error'>";
    for($i = 0; $i < count($campo); $i++ ){
        echo"<li>".$campo[$i]."</i>";
    }
}
else{


//base de datos
$conexion=mysqli_connect("localhost", "id17960999_pasantes_alpha", "W#~fUq9]sQ0kLo[#", "id17960999_pasantes_alpha_db");
$sql = "INSERT INTO  formulario values(Id_formulario,'$nombre','$apellido','$cedula','$universidad','$telefono',
'$direccion','$donde_vives','$correo')";
 $ejecutar = mysqli_query ($conexion,$sql) or die (mysqli_error($conexion));

 if ($ejecutar){

     echo "Datos guardados";
   
header("location:evaluaciones diseño.php");


}
else {
   
    echo  "Hay un error";
    
}
}


ob_end_flush();

?>