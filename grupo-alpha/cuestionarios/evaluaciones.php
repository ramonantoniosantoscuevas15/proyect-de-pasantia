<?php
ob_start();

$conexion = mysqli_connect("localhost", "id17960999_pasantes_alpha", "W#~fUq9]sQ0kLo[#", "id17960999_pasantes_alpha_db");

$repositorio = $_POST["repositorio"];
$linkedin = $_POST["linkedin"];
$portafolio = $_POST["portafolio"];
$Id_formulario = $_POST["Id_formulario"];
if ($_FILES["curriculum"]) {

  $nombre_base = basename($_FILES["curriculum"]["name"]);
  $nombre_final = date("d-m-y") . "-" . date("H-i-s") . "-" . $nombre_base;
  $ruta = "curriculum/" . $nombre_final;
  $subirarchivo = ($_FILES["curriculum"]["tmp_name"] . $ruta);

  if ($subirarchivo) {
    $insertar = "INSERT INTO evaluaciones (repositorio,linkedin,portafolio,curriculum,Id_formulario) VALUES ('$repositorio','$linkedin','$portafolio','$ruta','$Id_formulario')";

    $resultado = mysqli_query($conexion, $insertar);
    echo $insertar;

    if ($resultado) {
      echo "<script> alert('Se enviaron los datos');</script>";
      header("location:evaluaciones individuales diseño.php");
    } else {
      print("Errormessage: %s\n" . mysqli_error($conexion));
    }
  }
}


ob_end_flush();

?>