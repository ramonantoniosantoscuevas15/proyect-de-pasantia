<?php

include '../ayuda/utilidad.php';

session_start();

$estudiantes = $_SESSION['estudiantes'];

if(isset($_GET['id'])) {
    $estudianteId = $_GET['id'];

    $elementIndex = getIndexElement($estudiantes, 'id', $estudianteId);

    unset($estudiantes[$estudianteId]);

    $_SESSION['estudiantes'] = $estudiantes;
}

header("Location:../../../../../admin/recursos.php");
exit();

?>